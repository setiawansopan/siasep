<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\Frontend\DashboardModel;
use App\Models\Frontend\LaporanModel;

class Dashboard extends BaseController
{
    protected $dashboard;
    protected $progress;
    public function __construct()
    {
        $this->dashboard = new DashboardModel();
        $this->progress = new LaporanModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Dashboard',
            'claporan' => $this->dashboard->getCountLaporan(),
            'cproses'  => $this->dashboard->getCountSelesai(),
            'cselesai' => $this->dashboard->getCountSelesai(),
            'cizin'    => $this->dashboard->getCountIzin(),
            'progress'  => $this->progress->getLimit(5)
        ];
        return view('Frontend/Dashboard', $data);
    }
}
