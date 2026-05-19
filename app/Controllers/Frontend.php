<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Transaksi;

class Frontend extends BaseController
{

 	protected $transaksi;

    public function __construct()
    {
        $this->transaksi = new Transaksi();
    }

	public function frontend()
	{
		return view("frontend/index");
	}
	public function kontak()
	{
		return view("frontend/kontak");
	}
	public function sejarah()
	{
		return view("frontend/sejarah");
	}
	public function informasiAcara()
	{
		return view("frontend/informasi-acara");
	}
    public function laporanKeuangan()
    {
        $data['transaksi'] = $this->transaksi
            ->orderBy('tanggal', 'DESC')
            ->findAll();

        return view('frontend/laporan-keuangan', $data);
    }
}
