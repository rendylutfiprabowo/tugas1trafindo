<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NoteModel;

class Note extends BaseController
{
    public function index()
    {
        if (session()->get('role_user') == '2') {
            $model = new NoteModel();
            $notes = $model->findall();
            $data = [
                'notes' => $notes,
            ];
            return view('/user/note_user', $data);
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('/admin'));
        } else {
            return redirect()->to(base_url('login'));
        }
    }
}
