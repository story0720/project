<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index(){
        $user = auth()->user();
        dd($user->name);
        return "現在登入的是";
    }
}
