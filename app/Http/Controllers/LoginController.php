<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function view(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required|min:5|max:50'
        ]);
        if(Auth::attempt($credentials,$request->remember_me)){
            if($request->remember_me){
                Cookie::queue("email",$request->email);
                Cookie::queue("password",$request->password);
            }else{
                Cookie::queue(Cookie::forget("email"));
                Cookie::queue(Cookie::forget("password"));
            }
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('loginError','Login failed!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
