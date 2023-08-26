<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Note extends BaseController
{
    public function index()
    {
        return view('user/note_user');
    }
}
