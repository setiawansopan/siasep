<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Status extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Status',
        ];
        return view('Frontend/status', $data);
    }
}
