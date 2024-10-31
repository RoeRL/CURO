<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class TaskModel extends Model
{
    protected $db;
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'deadline', 'status'];
    public function __construct(ConnectionInterface &$db) {
        $this->db =& $db;
    }

    function add($data) {
        return $this->db
            ->table('tasks')
            ->insert($data);
    }

    public function getTaskId($task)
    {
        return $this->asArray()
            ->where(['title' => $task])
            ->first();
    }
}