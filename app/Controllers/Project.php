<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjectModel;

class Project extends BaseController
{
    public function index()
    {
        if (session()->get('role_user') == '2') {
            $model = new ProjectModel();
            $projects = $model->findall();
            $data = [
                'projects' => $projects,
            ];
            return view('/user/project_user', $data);
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('/admin'));
        } else {
            return redirect()->to(base_url('login'));
        }
    }
}
