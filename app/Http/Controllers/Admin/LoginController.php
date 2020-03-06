<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //登录表单
    public function index(){
        return view('admin.login');

    }

    //登录模板
    public function check(){
        return 123;
    }

    
}