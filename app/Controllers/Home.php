<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $taskModel;
    public function index($username)
    {
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return view('project', ['username' => $username]);
    }
    public function save()
    {
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
        $deadline = $this->request->getPost('deadline');
        $status = $this->request->getPost('status');


        $data = [
            'title'        => $title,
            'description'  => $description,
            'deadline'     => $deadline,
            'status'       => $status,
        ];

        $result = $this->taskModel->add($data);
        if (! $result) echo "something went wrong";
    }
    public function addTask(){
        return view("add_task");
    }
}
