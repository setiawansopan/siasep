<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\Frontend\DashboardModel;

class Dashboard extends BaseController
{
    protected $dashboard;
    public function __construct()
    {
        $this->dashboard = new DashboardModel();
    }

    public function index()
    {
        
        $data = [
            'title' => 'Dashboard',
            'claporan' => $this->dashboard->getCountLaporan(),
            'cproses'  => $this->dashboard->getCountSelesai(),
            'cselesai' => $this->dashboard->getCountSelesai(),
            'cizin'    => $this->dashboard->getCountIzin()
        ];
        return view('Frontend/Dashboard', $data);
    }
}
