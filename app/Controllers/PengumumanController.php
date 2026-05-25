<?php

namespace App\Controllers;

use App\Models\PengumumanModel;

class PengumumanController extends BaseController
{
    protected $pengumuman;

    public function __construct()
    {
        $this->pengumuman = new PengumumanModel();
    }

    // INDEX
    public function index()
    {
        return view('pengumuman/index', [
            'pengumuman' => $this->pengumuman
                ->orderBy('id', 'DESC')
                ->findAll()
        ]);
    }

    // CREATE
    public function create()
    {
        return view('pengumuman/create');
    }

    // SAVE
    public function save()
    {
        $data = $this->request->getPost();

        $file = $this->request->getFile('gambar');

        if ($file && $file->isValid()) {

            $namaGambar = $file->getRandomName();

            $file->move('uploads/pengumuman', $namaGambar);

            $data['gambar'] = $namaGambar;
        }

        $data['slug'] = url_title($data['judul'], '-', true);

        $this->pengumuman->save($data);

        return redirect()->to('/pengumuman')
            ->with('success', 'Pengumuman berhasil ditambahkan');
    }

    // EDIT
    public function edit($id)
    {
        return view('pengumuman/edit', [
            'pengumuman' => $this->pengumuman->find($id)
        ]);
    }

    // UPDATE
    public function update($id)
    {
        $pengumuman = $this->pengumuman->find($id);

        $data = $this->request->getPost();

        $file = $this->request->getFile('gambar');

        if ($file && $file->isValid()) {

            $namaGambar = $file->getRandomName();

            $file->move('uploads/pengumuman', $namaGambar);

            $data['gambar'] = $namaGambar;

            if (
                $pengumuman['gambar'] &&
                file_exists('uploads/pengumuman/' . $pengumuman['gambar'])
            ) {
                unlink('uploads/pengumuman/' . $pengumuman['gambar']);
            }
        }

        $data['slug'] = url_title($data['judul'], '-', true);

        $this->pengumuman->update($id, $data);

        return redirect()->to('/pengumuman')
            ->with('success', 'Pengumuman berhasil diupdate');
    }

    // DELETE
    public function delete($id)
    {
        $pengumuman = $this->pengumuman->find($id);

        if (
            $pengumuman['gambar'] &&
            file_exists('uploads/pengumuman/' . $pengumuman['gambar'])
        ) {
            unlink('uploads/pengumuman/' . $pengumuman['gambar']);
        }

        $this->pengumuman->delete($id);

        return redirect()->to('/pengumuman')
            ->with('success', 'Pengumuman berhasil dihapus');
    }
}