<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        //
        $data = [
            'title' => 'Dashboard',
        ];
        return view('Frontend/Dashboard', $data);
    }
}
