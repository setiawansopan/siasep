<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\Frontend\LaporanModel;
use App\Models\Frontend\RuangModel;
use App\Models\Frontend\PropertiModel;

class Laporan extends BaseController
{
    protected $dataLap;
    protected $dataRuang;
    protected $dataProperti;
    public function __construct()
    {
        $this->dataLap = new LaporanModel();
        $this->dataRuang = new RuangModel();
        $this->dataProperti = new PropertiModel();
    }

    public function index()
    {
        $data = [
            'title'   => 'Laporan',
            'laporan' => $this->dataLap->getAll()
        ];
        return view('Frontend/laporan', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Laporan',
            'ruang' => $this->dataRuang->findAll(),
            'properti' => $this->dataProperti->findAll()
        ];
        return view('Frontend/laporan_tambah', $data);
    }

    public function simpan()
    {
        $this->dataLap->save([
            'lap_ruang_id' => $this->request->getVar('lap_ruang_id'),
            'lap_properti_id' => $this->request->getVar('lap_properti_id'),
            'lap_nama' => $this->request->getVar('lap_nama'),
            'lap_keterangan' => $this->request->getVar('lap_keterangan'),
        ]);
        session()->setFlashdata('pesan', 'Data laporan telah tersimpan. Menunggu moderasi oleh admin.');

        return redirect()->to('/laporan');
    }
}
