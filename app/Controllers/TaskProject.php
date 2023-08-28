<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskProjectModel;
use App\Models\TaskProductModel;

class TaskProject extends BaseController
{
    public function index(){
        if (session()->get('role_user') == '2') {
            $model = new TaskProjectModel();
            $tasks = $model->findall();
            $data = [
                'tasks' => $tasks,
            ];    
            dd($project);

            return view('/user/task_user', $data);
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('/admin'));
        } else {
            return redirect()->to(base_url('login'));
        }
        return view('user/project_user');
    }
}
