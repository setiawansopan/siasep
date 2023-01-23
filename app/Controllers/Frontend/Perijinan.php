<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\Frontend\PerijinanModel;
use App\Models\Frontend\RuangModel;

class Perijinan extends BaseController
{
    protected $dataIjin;
    protected $dataRuang;
    public function __construct()
    {
        $this->dataIjin = new PerijinanModel();
        $this->dataRuang = new RuangModel();
    }

    public function index()
    {
        $ijin = $this->dataIjin->getAll();
        $data = [
            'title' => 'Perijinan',
            'ijin' => $ijin
        ];
        return view('Frontend/perijinan', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Laporan',
            'ruang' => $this->dataRuang->findAll()
        ];
        return view('Frontend/perijinan_tambah', $data);
    }

    public function simpan()
    {
        $this->dataIjin->save([
            'ijn_ruang_id' => $this->request->getVar('ijn_ruang_id'),
            'ijn_pengguna' => $this->request->getVar('ijn_pengguna'),
            'ijn_penanggungjawab' => $this->request->getVar('ijn_penanggungjawab'),
            'ijn_kegiatan' => $this->request->getVar('ijn_kegiatan'),
            'ijn_perangkat' => $this->request->getVar('ijn_perangkat'),
            'ijn_tanggal' => $this->request->getVar('ijn_tanggal'),
            'ijn_mulai' => $this->request->getVar('ijn_mulai'),
            'ijn_selesai' => $this->request->getVar('ijn_selesai'),
        ]);
        session()->setFlashdata('pesan', 'Data peminjaman telah tersimpan. Menunggu moderasi oleh admin.');

        return redirect()->to('/perijinan');
    }
}
