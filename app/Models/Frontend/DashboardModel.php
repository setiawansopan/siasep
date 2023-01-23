<?php

namespace App\Models\Frontend;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    protected $db;
    function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    function getCountLaporan()
    {
        $builder = $this->db->table('asp_laporan');
        return $builder->countAllResults();
    }

    function getCountSelesai()
    {
        $builder = $this->db->table('asp_laporan')
            ->like('lap_status', 'Selesai');
        return $builder->countAllResults();
    }

    function getCountProses()
    {
        $builder = $this->db->table('asp_laporan')
            ->like('lap_status', 'Proses');
        return $builder->countAllResults();
    }

    function getCountIzin()
    {
        $builder = $this->db->table('asp_perijinan');
        return $builder->countAllResults();
    }
}
