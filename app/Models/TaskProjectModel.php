<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskProjectModel extends Model
{
    protected $table = "task_project";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['id_taskproduct', 'id_project',];


    public function taskProduct(){
        return $this->belongsTo(TaskProductModel::Class,'id_taskproduct');
    }
    
    public function getTaskProject($where = false)
    {
        if ($where === false) {
            return $this->find();
        } else {
            return $this->getWhere($where);
        }
    }
}
