<?php

namespace App\Controllers;

use App\Models\PemeliharaanModel;

class PemeliharaanController extends BaseController
{
    protected $pemeliharaan;

    public function __construct()
    {
        $this->pemeliharaan = new PemeliharaanModel();
    }

    public function index()
    {
        return view('pemeliharaan/index', [

            'pemeliharaan' => $this->pemeliharaan
                ->orderBy('tanggal', 'DESC')
                ->findAll()

        ]);
    }

    public function create()
    {
        return view('pemeliharaan/create');
    }

    public function save()
    {
        $data = $this->request->getPost();

        $data['biaya'] = str_replace('.', '', $data['biaya']);

        $this->pemeliharaan->save($data);

        return redirect()->to('/pemeliharaan');
    }

    public function edit($id)
    {
        return view('pemeliharaan/edit', [

            'pemeliharaan' => $this->pemeliharaan->find($id)

        ]);
    }

    public function delete($id)
    {
        $this->pemeliharaan->delete($id);

        return redirect()->to('/pemeliharaan');
    }
}