<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Laporan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Laporan',
        ];
        return view('Frontend/laporan', $data);
    }
}
