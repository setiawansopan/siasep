<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Perijinan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Perijinan',
        ];
        return view('Frontend/perijinan', $data);
    }
}
