<?php

namespace App\Models\Frontend;

use CodeIgniter\Model;

class UsulanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'asp_usulan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['usul_nama', 'usul_ruang_id', 'usul_teks'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
