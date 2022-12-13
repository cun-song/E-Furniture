<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{

    public function view(){
        return view('register');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'username' => 'required|min:5|max:50|unique:users',
            'email' => ['required','email:dns','unique:users'],
            'password' => 'required|min:5|max:50'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);
        return redirect('/login')->with('success','Registration Successfull, ');
    }
}
