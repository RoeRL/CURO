<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    protected $userModel;

    public function __construct() {
        $db = db_connect();
        $this->userModel = new UserModel($db);
    }

    public function index($username) {
        
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/login');
        }
    
        $user = $this->userModel->getUserByUsername($username);
        if (!$user) {
            return redirect()->to('/')->with('error', 'User not found');
        }
    
        // Ensure the view and data are correctly called and formatted
        return view('user_profile', ['user' => $user]);
    }
}