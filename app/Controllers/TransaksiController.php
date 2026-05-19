<?php

namespace App\Controllers;

use App\Models\Transaksi;
use Dompdf\Dompdf;
use Dompdf\Options;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class TransaksiController extends BaseController
{
    protected $transaksi;

    public function __construct()
    {
        $this->transaksi = new Transaksi();
    }

    // ✅ LIST DATA
    public function index()
    {
        return view('transaksi/index', [
            'transaksi' => $this->transaksi
                ->orderBy('tanggal', 'DESC')
                ->findAll()
        ]);
    }

    // ✅ FORM CREATE
    public function create()
    {
        return view('transaksi/create');
    }

    // ✅ SAVE (INSERT + UPDATE 🔥)
  public function save()
    {
        $data = $this->request->getPost();

        // 🔥 bersihin format rupiah
        $data['jumlah'] = str_replace('.', '', $data['jumlah']);

        $id = $data['id'] ?? null;
        unset($data['id']);

        if ($id) {
            // UPDATE
            $this->transaksi->update($id, $data);
            $msg = 'Data berhasil diupdate';
        } else {
            // INSERT
            $this->transaksi->insert($data);
            $msg = 'Data berhasil ditambahkan';
        }

        return redirect()->to('/transaksi')
            ->with('success', $msg);
    }

    // ✅ EDIT
    public function edit($id)
    {
        return view('transaksi/edit', [
            'transaksi' => $this->transaksi->find($id)
        ]);
    }

    // ✅ DELETE
    public function delete($id)
    {
        $this->transaksi->delete($id);

        return redirect()->to('/transaksi')
            ->with('success', 'Data berhasil dihapus');
    }

    public function laporanKeuangan()
{
    $tanggalAwal  = $this->request->getGet('tanggal_awal');
    $tanggalAkhir = $this->request->getGet('tanggal_akhir');

    $builder = $this->transaksi;

    // =========================
    // FILTER TANGGAL
    // =========================
    if ($tanggalAwal && $tanggalAkhir) {
        $builder = $builder
            ->where('tanggal >=', $tanggalAwal)
            ->where('tanggal <=', $tanggalAkhir);
    }

    // =========================
    // DATA TRANSAKSI
    // =========================
    $transaksi = $builder
        ->orderBy('tanggal', 'DESC')
        ->findAll();

    // =========================
    // TOTAL PEMASUKAN
    // =========================
    $masukBuilder = clone $this->transaksi;

    if ($tanggalAwal && $tanggalAkhir) {
        $masukBuilder = $masukBuilder
            ->where('tanggal >=', $tanggalAwal)
            ->where('tanggal <=', $tanggalAkhir);
    }

    $totalMasuk = $masukBuilder
        ->where('tipe', 'masuk')
        ->selectSum('jumlah')
        ->first()['jumlah'] ?? 0;

    // =========================
    // TOTAL PENGELUARAN
    // =========================
    $keluarBuilder = clone $this->transaksi;

    if ($tanggalAwal && $tanggalAkhir) {
        $keluarBuilder = $keluarBuilder
            ->where('tanggal >=', $tanggalAwal)
            ->where('tanggal <=', $tanggalAkhir);
    }

    $totalKeluar = $keluarBuilder
        ->where('tipe', 'keluar')
        ->selectSum('jumlah')
        ->first()['jumlah'] ?? 0;

    // =========================
    // SALDO AKHIR
    // =========================
    $saldo = $totalMasuk - $totalKeluar;

    // =========================
    // REKAP KATEGORI
    // =========================
    $kategoriBuilder = clone $this->transaksi;

    if ($tanggalAwal && $tanggalAkhir) {
        $kategoriBuilder = $kategoriBuilder
            ->where('tanggal >=', $tanggalAwal)
            ->where('tanggal <=', $tanggalAkhir);
    }

    $rekapKategori = $kategoriBuilder
        ->select('kategori, SUM(jumlah) as total')
        ->groupBy('kategori')
        ->findAll();

    // =========================
    // GRAFIK BULANAN
    // =========================
    $grafikBuilder = clone $this->transaksi;

    $grafikKeuangan = $grafikBuilder
        ->select("
            DATE_FORMAT(tanggal, '%Y-%m') as bulan,
            SUM(CASE WHEN tipe = 'masuk' THEN jumlah ELSE 0 END) as pemasukan,
            SUM(CASE WHEN tipe = 'keluar' THEN jumlah ELSE 0 END) as pengeluaran
        ")
        ->groupBy('bulan')
        ->orderBy('bulan', 'ASC')
        ->findAll();

    return view('transaksi/laporan_keuangan', [
        'transaksi'      => $transaksi,
        'totalMasuk'     => $totalMasuk,
        'totalKeluar'    => $totalKeluar,
        'saldo'          => $saldo,
        'rekapKategori'  => $rekapKategori,
        'grafikKeuangan' => $grafikKeuangan,
        'tanggalAwal'    => $tanggalAwal,
        'tanggalAkhir'   => $tanggalAkhir
    ]);
}


public function exportExcel()
{
    $transaksi = $this->transaksi
        ->orderBy('tanggal', 'DESC')
        ->findAll();

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // TITLE
    $sheet->mergeCells('A1:G1');
    $sheet->setCellValue('A1', 'LAPORAN KEUANGAN MASJID AL HIKMAH');

    $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(16);

    // HEADER
    $headers = [
        'No',
        'Tanggal',
        'Keterangan',
        'Kategori',
        'Jumlah',
        'Tipe',
        'Metode'
    ];

    $col = 'A';

    foreach ($headers as $header) {

        $sheet->setCellValue($col . '3', $header);

        $sheet->getStyle($col . '3')->getFont()->setBold(true);

        $sheet->getStyle($col . '3')->getFill()
            ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
            ->getStartColor()->setARGB('D9EAF7');

        $col++;
    }

    // DATA
    $rowNum = 4;

    foreach ($transaksi as $key => $row) {

        $sheet->setCellValue('A' . $rowNum, $key + 1);
        $sheet->setCellValue('B' . $rowNum, $row['tanggal']);
        $sheet->setCellValue('C' . $rowNum, $row['keterangan']);
        $sheet->setCellValue('D' . $rowNum, $row['kategori']);
        $sheet->setCellValue('E' . $rowNum, $row['jumlah']);
        $sheet->setCellValue('F' . $rowNum, strtoupper($row['tipe']));
        $sheet->setCellValue('G' . $rowNum, $row['metode']);

        $rowNum++;
    }

    // AUTO SIZE
    foreach(range('A','G') as $columnID) {
        $sheet->getColumnDimension($columnID)
            ->setAutoSize(true);
    }

    // FORMAT RUPIAH
    $sheet->getStyle('E4:E' . $rowNum)
        ->getNumberFormat()
        ->setFormatCode('"Rp"#,##0');

    // OUTPUT
    $filename = 'laporan-keuangan.xlsx';

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    header('Content-Disposition: attachment;filename="'.$filename.'"');

    header('Cache-Control: max-age=0');

    $writer = new Xlsx($spreadsheet);

    $writer->save('php://output');

    exit;
}
public function print()
{
    return view('transaksi/print', [
        'transaksi' => $this->transaksi
            ->orderBy('tanggal', 'DESC')
            ->findAll()
    ]);
}

public function exportPdf()
{
    $transaksi = $this->transaksi
        ->orderBy('tanggal', 'DESC')
        ->findAll();

    $html = view('transaksi/pdf', [
        'transaksi' => $transaksi
    ]);

    $dompdf = new Dompdf();

    $dompdf->loadHtml($html);

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    $dompdf->stream('laporan-keuangan.pdf', [
        'Attachment' => true
    ]);
}
}