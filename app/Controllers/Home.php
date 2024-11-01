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
    public function sprintView() {
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/login');
        }
        $userId = session()->get('userId');

        $tasks = $this->taskModel->getAllTasks($userId);
        $data = [
            'pendingTasks' => array_filter($tasks, function ($task) { return $task['status'] === 'pending'; }),
            'onHoldTasks' => array_filter($tasks, function ($task) { return $task['status'] === 'on_hold'; }),
            'completedTasks' => array_filter($tasks, function ($task) { return $task['status'] === 'completed'; })
        ];
        return view('sprint', $data);
    }
    public function index() {
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/login');
        }
        $username = session()->get('username');
        $userId = session()->get('userId');

        $tasks = $this->taskModel->getAllTasks($userId);
        $data = ['username' => $username, 'tasks' => $tasks];
        return view('project', $data);

    }
    public function save()
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'deadline' => $this->request->getPost('deadline'),
            'status' => $this->request->getPost('status'),
            'userId' => session()->get('userId')
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
