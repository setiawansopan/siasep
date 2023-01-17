<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\Frontend\PemeliharaanModel;

class Pemeliharaan extends BaseController
{
    protected $dataPlh;
    public function __construct()
    {
        $this->dataPlh = new PemeliharaanModel();
    }

    public function index()
    {
        $pemeliharaan = $this->dataPlh->getAll();
        $data = [
            'title' => 'Pemeliharaan',
            'pemeliharaan' => $pemeliharaan
        ];
        return view('Frontend/pemeliharaan', $data);
    }
}
