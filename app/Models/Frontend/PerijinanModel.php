<?php

namespace App\Models\Frontend;

use CodeIgniter\Model;

class PerijinanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'asp_perijinan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    function getAll()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('asp_perijinan');
        $builder->select('*');
        $builder->join('asp_ruang', 'asp_perijinan.ijn_ruang_id = asp_ruang.id');
        $query = $builder->get();
        return $query->getResultArray();
    }

}
