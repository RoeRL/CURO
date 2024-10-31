<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class MiddlemanModel extends Model
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

    public function getTaskId($userId)
    {
        return $this->select('taskId')
            ->asArray()
            ->where(['userId' => $userId])
            ->first();
    }
    public function getUserId($taskId)
    {
        return $this->select('userId')
            ->asArray()
            ->where(['taskId' => $taskId])
            ->first();
    }
}