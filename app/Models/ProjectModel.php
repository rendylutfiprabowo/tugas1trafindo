<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = "project";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_project', 'desc_project', 'tgl_project',];

    public function getTasks($where = false)
    {
        $builder = $this->db->table('task_project');
        $builder->join('project','project.id = task_project.id_project');
        $builder->join('task_product','task_product.id = task_project.id_taskproduct');
        if ($where === false) {
            $query = $builder->get();
            return $query->getResult();
        }
        $builder->where('task_project'.'.id_project', $where);
        $query = $builder->get();
        return $query->getResult();
    }
}
