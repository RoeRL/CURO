<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return view('project');
    }
}
