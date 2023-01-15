<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Usulan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Usulan',
        ];
        return view('Frontend/usulan', $data);
    }
}
