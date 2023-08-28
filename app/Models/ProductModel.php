<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = "product";
    protected $primaryKey = "id";
    // protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_product', 'desc_product', 'id_user',];

    public function getProduct($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
}
