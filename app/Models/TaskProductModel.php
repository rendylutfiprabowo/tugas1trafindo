<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskProductModel extends Model
{
    protected $table = "task_product";
    protected $primaryKey = "id";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_taskproduct', 'desc_taskproduct', 'id_product',];

    public function getTaskProduct($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }
}
