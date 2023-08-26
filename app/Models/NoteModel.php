<?php

namespace App\Models;

use CodeIgniter\Model;

class NoteModel extends Model
{
    protected $table = "notes";
    protected $primaryKey = "id";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_notes', 'desc_notes', 'id_task',];

    public function getNote($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }
}
