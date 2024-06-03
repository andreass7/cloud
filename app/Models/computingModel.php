<?php

namespace App\Models;

use CodeIgniter\Model;

class computingModel extends Model
{
    protected $table = 'tb_add';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = [
        'id', 'nama_brg', 'jenis_brg', 'tgl_masuk'
    ];
}
