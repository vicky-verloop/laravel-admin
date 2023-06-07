<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function forgetPassword(){
        return view('auth.forget-password');
    }
    
    public function newRegistration(){
        return view('auth.new-registration');
    }

    public function resetPassword(){
        return redirect('/changePassword');
    }

    public function changePassword(){
        return view('auth.reset-password');
    }
}
