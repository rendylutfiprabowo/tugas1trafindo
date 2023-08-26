<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TaskProject extends BaseController
{
    public function index()
    {
        return view('user/project_user');
    }
}
