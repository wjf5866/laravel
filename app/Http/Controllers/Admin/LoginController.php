<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLogin;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //登录表单
    public function index(){
        return view('admin.login');

    } 

    //登录模板
    public function check(AdminLogin $request){
        $data = $request->validated();
        $data['state'] = AdminUser::NORMAL; 

        $is = Auth::guard('admin')->attempt( $data );

        if (!$is){
            return back()->withErrors(['username'=>'账号不可用']);
        }
        
        return redirect()->route('admin.index');
    }
    
    //退出
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.index');
    }
    
}