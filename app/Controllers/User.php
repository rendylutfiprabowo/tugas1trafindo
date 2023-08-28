<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        if (session()->get('role_user') == '2') {
            $model = new UserModel();
            $users = $model->findAll();
            $data = [
                'users' => $users,
            ];
            return view('/user/profile_user', $data);
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('/admin'));
        } else {
            return redirect()->to(base_url('login'));
        }
        return view('user/task_user');
    }

    public function template()
    {
        return view('user/template');
    }
}
