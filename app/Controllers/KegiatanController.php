<?php

namespace App\Controllers;

use App\Models\KegiatanModel;

class KegiatanController extends BaseController
{
    protected $kegiatan;

    public function __construct()
    {
        $this->kegiatan = new KegiatanModel();
    }

    // LIST
    public function index()
    {
        return view('kegiatan/index', [
            'kegiatan' => $this->kegiatan
                ->orderBy('id', 'DESC')
                ->findAll()
        ]);
    }

    // FORM CREATE
    public function create()
    {
        return view('kegiatan/create');
    }

    // SAVE
    public function save()
    {
        $data = $this->request->getPost();

        // upload gambar
        $file = $this->request->getFile('gambar');

        if ($file && $file->isValid()) {

            $namaGambar = $file->getRandomName();

            $file->move('uploads/kegiatan', $namaGambar);

            $data['gambar'] = $namaGambar;
        }

        // slug otomatis
        $data['slug'] = url_title($data['judul'], '-', true);

        if (!$this->kegiatan->save($data)) {

            return redirect()->back()
                ->withInput()
                ->with('errors', $this->kegiatan->errors());
        }

        return redirect()->to('/kegiatan')
            ->with('success', 'Data kegiatan berhasil disimpan');
    }

    // FORM EDIT
    public function edit($id)
    {
        return view('kegiatan/edit', [
            'kegiatan' => $this->kegiatan->find($id)
        ]);
    }

    // UPDATE
    public function update($id)
    {
        $kegiatan = $this->kegiatan->find($id);

        $data = $this->request->getPost();

        // upload gambar baru
        $file = $this->request->getFile('gambar');

        if ($file && $file->isValid()) {

            $namaGambar = $file->getRandomName();

            $file->move('uploads/kegiatan', $namaGambar);

            $data['gambar'] = $namaGambar;

            // hapus gambar lama
            if (
                $kegiatan['gambar'] &&
                file_exists('uploads/kegiatan/' . $kegiatan['gambar'])
            ) {
                unlink('uploads/kegiatan/' . $kegiatan['gambar']);
            }
        }

        // update slug
        $data['slug'] = url_title($data['judul'], '-', true);

        if (!$this->kegiatan->update($id, $data)) {

            return redirect()->back()
                ->withInput()
                ->with('errors', $this->kegiatan->errors());
        }

        return redirect()->to('/kegiatan')
            ->with('success', 'Data kegiatan berhasil diupdate');
    }

    // DELETE
    public function delete($id)
    {
        $kegiatan = $this->kegiatan->find($id);

        // hapus gambar
        if (
            $kegiatan['gambar'] &&
            file_exists('uploads/kegiatan/' . $kegiatan['gambar'])
        ) {
            unlink('uploads/kegiatan/' . $kegiatan['gambar']);
        }

        $this->kegiatan->delete($id);

        return redirect()->to('/kegiatan')
            ->with('success', 'Data kegiatan berhasil dihapus');
    }
}