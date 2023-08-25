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
        $password = $this->request->getVar('password_user');

        $result = $User->where(['email_user' => $email])->first();

        if ($result !== null) {

            if ($result->id) {

                if (password_verify($password, $result->password_user)) {
                    session()->set([
                        'nama_user' => $result->nama_user,
                        'email_user' => $result->email_user,
                        'role_user' => $result->role_user
                    ]);
                    $user_data = [
                        'title' => 'Login',
                        'nama_user' => $result->nama_user,
                        'email_user' => $result->email_user,
                        'role_user' => $result->role_user
                    ];
                    $this->session->set($user_data);
                    if (session()->get('role_user') == '1') {
                        return redirect()->to('/task_user');
                    } elseif (session()->get('role_user') == '2') {
                        return redirect()->to('/dashboarduser');
                    }
                } else {
                    $session = session();
                    $session->setFlashdata('error', 'Email & Password Salah');
                    return redirect()->back();
                }
            } else {
                $session = session();
                $session->setFlashdata('error', 'Email & Password Salah');
                return redirect()->back();
            }
        } else {
            $session = session();
            $session->setFlashdata('error', 'Email & Password Salah');
            return redirect()->back();
        }
    }

    public function logout()
    {
        // Hapus data pengguna dari sesi
        session()->destroy();

        return view('Login');
    }
}
