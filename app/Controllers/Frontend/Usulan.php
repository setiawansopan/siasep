<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\Frontend\UsulanModel;

class Usulan extends BaseController
{

    protected $dataUsul;
    public function __construct()
    {
        $this->dataUsul = new UsulanModel();
    }

    public function index()
    {
        $usulan = $this->dataUsul->findAll();
        $data = [
            'title'  => 'Usulan',
            'usulan' => $usulan
        ];
        return view('Frontend/usulan', $data);
    }
}
