<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Kegiatan extends BaseController
{
    public function index()
    {
        //
        $data = [
            'title' => 'Kegiatan',
        ];
        return view('Frontend/kegiatan', $data);
    }
}
