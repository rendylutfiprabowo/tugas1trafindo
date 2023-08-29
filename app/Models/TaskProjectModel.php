<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskProjectModel extends Model
{
    protected $table = "task_project";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['id_taskproduct', 'id_project','completed'];
    
    public function getData($where = false)
    {
        $builder = $this->db->table('task_project');
        $builder->select('task_project.id AS task_project_id, 
                        project.*,
                        task_product.*');
        $builder->join('project', 'project.id = task_project.id_project');
        $builder->join('task_product', 'task_product.id = task_project.id_taskproduct');

        if ($where === false) {
            $query = $builder->get();
            return $query->getResult();
        }

        $builder->where('task_project.id', $where);
        $query = $builder->get();
        return $query->getResult();
    }
}
