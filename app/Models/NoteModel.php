<?php

namespace App\Models;

use CodeIgniter\Model;

class NoteModel extends Model
{
    protected $table = "notes";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_notes', 'desc_notes', 'id_task',];

    public function getDatas($where = false)
    {
        $builder = $this->db->table('note');
        $builder->join('task_product','task_product.id = task_project.id_taskproduct');
        $builder->join('project','project.id = task_project.id_project');
        if ($where === false) {
            $query = $builder->get();
            return $query->getResult();
        }
        $builder->where($this->table.'.id', $where);
        $query = $builder->get();
        return $query->getResult();
    }
}
