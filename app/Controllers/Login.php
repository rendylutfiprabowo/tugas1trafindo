<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \App\Models\User;

class Login extends BaseController
{
    public function index()
    {
        return view('Login');
    }

    public function do_login()
    {
        $User = new User();

        $email = $this->request->getPost('email_user');
        $password = $this->request->getPost('password_user');

        $result = $User->where('email_user', $email)->first();

        if ($result->id > 0) {
            if (password_verify($password, $result->password_user)) {

                session()->set("user", $result);
                if ($result['role_user'] == '1') {
                    return redirect()->to('/task_user');
                } else if ($result['role_user'] == '2') {
                    return redirect()->to('/dashboarduser');
                }
            } else {
                echo 'Invalid email or password';
            }
        } else {
            echo 'Invalid email or password';
        }
    }
}
