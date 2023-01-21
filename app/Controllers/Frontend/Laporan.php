<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\Frontend\LaporanModel;

class Laporan extends BaseController
{
    protected $dataLap;
    public function __construct()
    {
        $this->dataLap = new LaporanModel();
    }

    public function index()
    {
        $laporan = $this->dataLap->getAll();
        $data = [
            'title'   => 'Laporan',
            'laporan' => $laporan
        ];
        return view('Frontend/laporan', $data);
    }
}
