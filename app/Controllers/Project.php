<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjectModel;
use App\Models\ProductModel;
use App\Models\TaskProjectModel;
use App\Models\TaskProductModel;

class Project extends BaseController
{
    public function index()
    {
        if (session()->get('role_user') == '2') {
            $model = new ProjectModel();
            $model2 = new ProductModel();
            $projects = $model->findall();
            $products = $model2->findall();
            $data = [
                'projects' => $projects,
                'products' => $products,
            ];
            return view('/user/project_user', $data);
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('/admin'));
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function tasks($id){
        if (session()->get('role_user') == '2') {
            $model = new ProjectModel();
            $project = $model->find($id);
            $tasks = $model->getTasks($project->id);
            $data = [
                'tasks' => $tasks,
                'project' => $project,
            ];    
            return view('/user/project_task_user', $data);
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('/admin'));
        } else {
            return redirect()->to(base_url('login'));
        }
        return view('user/project_user');
    }

    public function create(){
        $model = new ProjectModel();
        $model2 = new ProductModel();
        $model3 = new TaskProjectModel();
        $model4 = new TaskProductModel();
        $id_product = $this->request->getPost('id_product');
        $product = $model2->find($id_product);
        $tasks = $model4->where('id_product',$id_product)->findAll();
        $model->insert([
            'nama_project' => $product->nama_product,
            'desc_project' => $product->desc_product,
            'tgl_project' => $this->request->getPost('tgl_project'),
        ]);
        $id_project = $model->getInsertID();
        foreach ($tasks as $task) {
            $model3->insert([
                'id_project'=>$id_project,
                'id_taskproduct'=>$task->id,
            ]);
        }
        return redirect('project')->with('success', 'Data Added Successfully');
    }
}
