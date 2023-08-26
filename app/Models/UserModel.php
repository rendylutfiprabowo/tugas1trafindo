<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $returnType = "object";
    protected $primaryKey = "id";
    protected $allowedFields = ['nama_user', 'email_user', 'password_user', 'role_user',];

    public function getUser($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }
}
