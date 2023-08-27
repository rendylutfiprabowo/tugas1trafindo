<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskProjectModel extends Model
{
    protected $table = "task_project";
    protected $primaryKey = "id";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = ['id_taskproduct', 'id_project',];

    public function getTaskProject($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }
}
