<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\TaskProductModel;

class TaskProduct extends BaseController
{
    protected $TaskProduct;
    protected $product;
    function __construct()
    {
        $this->TaskProduct = new TaskProductModel();
        $this->product = new ProductModel();
    }

    public function index($id)
    {
        $this->product->getData($id)[0];
        $this->TaskProduct->where('id_product', $this->product['id'])->findAll();
        $data = [
            'product' => $this->product,
            'taskproduct' => $this->TaskProduct,
        ];
        return view('admin/product_task_admin', $data);
    }

    public function create()
    {
        $this->TaskProduct->insert([
            'nama_taskproduct'   => $this->request->getPost('nama_taskproduct'),
            'desc_taskproduct' => $this->request->getPost('desc_taskproduct'),
            'id_product' => $this->request->getPost('id_product'),
        ]);

        return redirect('product')->with('success', 'Task Added Successfully');
    }
    public function edit($id)
    {

        $this->TaskProduct->update($id, [
            'nama_taskproduct'   => $this->request->getPost('nama_taskproduct'),
            'desc_taskproduct' => $this->request->getPost('desc_taskproduct'),
            'id_product' => $this->request->getPost('id_product'),
        ]);

        return redirect('product')->with('success', 'Data Updated Successfully');
    }

    public function delete($id)
    {
        $this->TaskProduct->delete($id);

        return redirect('product')->with('success', 'Data Deleted Successfully');
    }
}
