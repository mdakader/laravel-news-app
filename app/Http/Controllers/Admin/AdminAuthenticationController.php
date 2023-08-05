<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SendResetLinkRequest;

class AdminAuthenticationController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function logout(Request $request){
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function forgotPassword(){
        return view('admin.auth.forgot-password');
    }

    public function sendResetLink(SendResetLinkRequest $request){

    }
}
