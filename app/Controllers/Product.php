<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    protected $product;

    function __construct()
    {
        $this->product = new ProductModel();
    }

    public function index()
    {
        $data['products'] = $this->product->findAll();

        return view('admin/product_admin', $data);
    }

    public function create()
    {
        $this->product->insert([
            'nama_product'   => $this->request->getPost('nama_product'),
            'desc_product' => $this->request->getPost('desc_product'),
            'id_user' => $this->request->getPost('id_user'),
        ]);

        return redirect('product')->with('success', 'Data Added Successfully');
    }

    public function edit($id)
    {

        $this->product->update($id, [
            'nama_product'   => $this->request->getPost('nama_product'),
            'desc_product' => $this->request->getPost('desc_product'),
            'id_user' => $this->request->getPost('id_user'),
        ]);

        return redirect('product')->with('success', 'Data Updated Successfully');
    }

    public function delete($id)
    {
        $this->product->delete($id);

        return redirect('product')->with('success', 'Data Deleted Successfully');
    }
}
