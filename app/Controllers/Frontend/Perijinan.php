<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\Frontend\PerijinanModel;

class Perijinan extends BaseController
{
    protected $dataIjin;
    public function __construct()
    {
        $this->dataIjin = new PerijinanModel();
    }

    public function index()
    {
        $ijin = $this->dataIjin->getAll();
        $data = [
            'title' => 'Perijinan',
            'ijin' => $ijin
        ];
        return view('Frontend/perijinan', $data);
    }
}
