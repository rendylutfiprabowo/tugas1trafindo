<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        return view('user/task_user');
    }

    public function template()
    {
        return view('user/template');
    }
}
