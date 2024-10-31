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
    public function index($username)
    {
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return view('project', ['username' => $username]);
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
            return redirect()->to('/success');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    public function addTask(){
        return view("add_task");
    }
}
