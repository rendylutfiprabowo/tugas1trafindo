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

    public function create()
    {
        $model = new NoteModel();
        $model->insert([
            'nama_notes'   => $this->request->getPost('nama_notes'),
            'desc_notes' => $this->request->getPost('desc_notes'),
            'id_task' => $this->request->getPost('id_task'),
        ]);
        $id = $this->request->getPost('id_task');

        return redirect("task")->with('success', 'Data Added Successfully');
    }

    public function delete($id)
    {
        $model = new NoteModel();
        $model->delete($id);

        return redirect('task')->with('success', 'Data Deleted Successfully');
    }

    public function edit($id)
    {
        $model = new NoteModel();
        $model->update($id, [
            'nama_notes'   => $this->request->getPost('nama_notes'),
            'desc_notes' => $this->request->getPost('desc_notes'),
            // 'id_task' => $this->request->getPost('id_task'),
        ]);

        return redirect('task')->with('success', 'Data Updated Successfully');
    }
}
