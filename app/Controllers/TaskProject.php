<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskProjectModel;
use App\Models\TaskProductModel;
use App\Models\NoteModel;

class TaskProject extends BaseController
{
    public function index(){
        if (session()->get('role_user') == '2') {
            $model = new TaskProjectModel();
            $tasks = $model->getData();
            $data = [
                'tasks' => $tasks,
            ];    
            return view('/user/task_user', $data);
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('/admin'));
        } else {
            return redirect()->to(base_url('login'));
        }
        return view('user/project_user');
    }

    public function notes($id){
        if (session()->get('role_user') == '2') {
            $model = new TaskProjectModel();
            $model2 = new NoteModel();
            $task = $model->getData($id)[0];
            $notes = $model2->where('id_task',$task->id)->findall();
            $data = [
                'task' => $task,
                'notes' => $notes,
            ];    
            return view('/user/note_user', $data);
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('/admin'));
        } else {
            return redirect()->to(base_url('login'));
        }
        return view('user/project_user');
    }

    public function complete($id){
        $model = new TaskProjectModel();
        $model->update($id, [
            'completed'   => 'COMPLETED',
        ]);
        return redirect('task')->with('success', 'Data Updated Successfully');
    }
}
