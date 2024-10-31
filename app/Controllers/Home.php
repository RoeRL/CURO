<?php

namespace App\Controllers;
use App\Models\TaskModel;

class Home extends BaseController
{
    protected $taskModel;

    public function __construct() {

        $db = db_connect();
        $this->taskModel = new TaskModel($db);
    }
    public function index() {
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/login');
        }
        $username = session()->get('username');
        $data = ['username' => $username];
        return view('project', $data);
    }
    public function save()
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'deadline' => $this->request->getPost('deadline'),
            'status' => $this->request->getPost('status')
        ];
        if ($this->taskModel->insertTask($data)) {
            return redirect()->to('/');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    public function addTask(){
        return view("add_task");
    }
}
