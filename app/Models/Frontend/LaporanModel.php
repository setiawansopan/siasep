<?php

namespace App\Models\Frontend;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'asp_laporan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['lap_ruang_id', 'lap_properti_id', 'lap_nama', 'lap_keterangan'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $db;
    function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    function getAll()
    {
        $builder = $this->db->table('asp_laporan');
        $builder->select('*');
        $builder->join('asp_ruang', 'asp_laporan.lap_ruang_id = asp_ruang.id');
        $builder->join('asp_properti', 'asp_laporan.lap_properti_id = asp_properti.id');
        $query = $builder->get();
        return $query->getResultArray();
    }

    function getLimit($limit)
    {
        $builder = $this->db->table('asp_laporan');
        $builder->select('*');
        $builder->join('asp_ruang', 'asp_laporan.lap_ruang_id = asp_ruang.id');
        $builder->join('asp_properti', 'asp_laporan.lap_properti_id = asp_properti.id');
        $builder->limit($limit);
        $query = $builder->get();
        return $query->getResultArray();
    }
}
