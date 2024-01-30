<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = array(
            "name" => "Zouheir",
            "email" => "zouheir@gmail.com",
            "phone" => "123456789"
        );
        return view('user', compact('users'));
    }
}
