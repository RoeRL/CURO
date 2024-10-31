<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class UserModel extends Model
{
    protected $db;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];
    public function __construct(ConnectionInterface &$db) {
        parent::__construct();
        $this->db =& $db;
    }

    function add($data) {
        return $this->db
            ->table('users')
            ->insert($data);
    }

    public function getUserByUsername($username)
    {
        return $this->asArray()
            ->where(['username' => $username])
            ->first();
    }
    public function getIdByUsername($username){
        return $this->select('id')
            ->asArray()
            ->where(['username' => $username])
            ->first();
    }
}
