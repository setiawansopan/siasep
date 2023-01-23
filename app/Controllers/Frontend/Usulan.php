<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\Frontend\RuangModel;
use App\Models\Frontend\UsulanModel;

class Usulan extends BaseController
{

    protected $dataRuang;
    protected $dataUsul;
    public function __construct()
    {
        $this->dataRuang = new RuangModel();
        $this->dataUsul = new UsulanModel();
    }

    public function index()
    {
        $data = [
            'title'  => 'Usulan',
            'usulan' => $this->dataRuang->findAll()
        ];
        return view('Frontend/usulan', $data);
    }

    public function simpan()
    {
        $this->dataUsul->save([
            'usul_ruang_id' => $this->request->getVar('usul_ruang_id'),
            'usul_nama' => $this->request->getVar('usul_nama'),
            'usul_teks' => $this->request->getVar('usul_teks')
        ]);
        session()->setFlashdata('pesan', 'Data usulan telah tersimpan. Terimakasih atas perhatian anda.');

        return redirect()->to('/usulan');
    }
}
