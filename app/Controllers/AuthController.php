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
    public function login(){
        if (session()->has('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function save()
    {
        $username = $this->request->getPost('username');
        $password      = $this->request->getPost('password');


        $data = [
            'username'        => $username,
            'password'         => $password,
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

    if ($user && $user['password'] == $this->request->getVar('password')) {
        session()->set([
            'isLoggedIn' => true,
            'userId' => $user['id'],
            'username' => $user['username']
        ]);

        return redirect()->to('/');
    } else {
        return redirect()->back()->with('error', 'Invalid credentials');
    }
}
    public function logout()
    {
        session()->destroy(); // This destroys the session completely
        return redirect()->to('/login');
    }
}