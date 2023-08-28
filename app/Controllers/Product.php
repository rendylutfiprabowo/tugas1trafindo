<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        // Model initialization
        $productModel = new ProductModel();

        $data = array(
            'products' => $productModel->findAll(), // Mengambil semua data produk tanpa paginasi
        );

        return view('admin/product_admin', $data);
    }


    public function add()
    {
        return view('admin/product_add');
    }
    public function store()
    {
        //load helper form and URL
        helper(['form', 'url']);

        //define validation
        $validation = $this->validate([
            'nama_product' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Product.'
                ]
            ],
        ]);

        if (!$validation) {

            //render view with error validation message
            return view('admin/product_add', [
                'validation' => $this->validator
            ]);
        } else {

            //model initialize
            $productModel = new productModel();

            //insert data into database
            $productModel->add([
                'nama_product'   => $this->request->getPost('nama_product'),
                'desc_product' => $this->request->getPost('desc_product'),
                'id_user' => $this->request->getPost('id_user'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Data Berhasil Disimpan');


            return redirect()->to(base_url('product'));
        }
    }
    public function edit($id)
    {
        $productModel = new ProductModel();
        $data = $productModel->find($id);

        if (is_object($data)) {
            $_data['products'] = $data;
            return view('admin/product_edit', $_data);
        }
    }


    public function update($id)
    {
        $productModel = new ProductModel();

        $data = [
            'nama_product' => $this->request->getPost('nama_product'),
            'desc_product' => $this->request->getPost('desc_product'),
            'id_user' => $this->request->getPost('id_user'),
        ];

        $productModel->update($id, $data);

        return redirect()->to(base_url('product'));
    }


    // public function delete($id)
    // {
    //     $this->contact->delete($id);

    //     return redirect('contact')->with('success', 'Data Deleted Successfully');
    // }
}
