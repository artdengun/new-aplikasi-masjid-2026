<?php

namespace App\Controllers;

use App\Models\Inventaris;

class InventarisController extends BaseController
{
    protected $inventaris;

    public function __construct()
    {
        $this->inventaris = new Inventaris();
    }

    // LIST
    public function index()
    {
        return view('inventaris/index', [
            'inventaris' => $this->inventaris
                ->orderBy('id', 'DESC')
                ->findAll()
        ]);
    }

    // FORM CREATE
    public function create()
    {
        return view('inventaris/create');
    }

    // SAVE
    public function save()
    {
        $data = $this->request->getPost();

        $data['harga'] = str_replace('.', '', $data['harga']);

        if (!$this->inventaris->save($data)) {

            return redirect()->back()
                ->withInput()
                ->with('errors', $this->inventaris->errors());
        }

        return redirect()->to('/inventaris')
            ->with('success', 'Data inventaris berhasil disimpan');
    }

    // EDIT
    public function edit($id)
    {
        return view('inventaris/edit', [
            'inventaris' => $this->inventaris->find($id)
        ]);
    }

    // DELETE
    public function delete($id)
    {
        $this->inventaris->delete($id);

        return redirect()->to('/inventaris')
            ->with('success', 'Data inventaris berhasil dihapus');
    }
}