<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = "product";
    protected $primaryKey = "id";
    protected $returnType = "object";
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

    public function getTasks($id = false)
    {
        $builder = $this->db->table('task_product');
        $builder->join('product', 'product.id = task_product.id_product');
        $builder->join('task_product', 'task_product.id = task_product.id_taskproduct');
        if ($id === false) {
            $query = $builder->get();
            return $query->getResult();
        }
        $builder->where('task_product' . '.id_product', $id);
        $query = $builder->get();
        return $query->getResult();
    }
}
