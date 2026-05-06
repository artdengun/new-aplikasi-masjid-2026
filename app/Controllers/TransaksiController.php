<?php

namespace App\Controllers;

use App\Models\Transaksi;

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
}