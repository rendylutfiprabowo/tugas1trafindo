<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Project extends BaseController
{
    public function index()
    {
        return view('admin/project_admin');
    }
}
