<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $userModel;
    public function __construct() {

        $db = db_connect();
        $this->userModel = new UserModel($db);
    }
=======
class AuthController extends BaseController
{


    public function save()
    {
        $username = $this->request->getPost('username');
        $password      = $this->request->getPost('password');

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'username'        => $username,
            'password'         => $passwordHash,
        ];

        $result = $this->userModel->add($data);
        if($result) {
            return redirect()->to('/login');

        } else {
            echo "Something went wrong";
        }
    }
    public function checkLogin()
    {
        $username = $this->request->getVar('username');
        $user = $this->userModel->getUserByUsername($username);

        if ($user) {
            $password = $this->request->getVar('password');
            if (password_verify($password, $user['password'])) {
                return redirect()->to('/');
            } else {
                echo 'Login failed';
            }
        } else {
            echo 'User not found';
        }
    }
}