<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function __construct() {
        $this->middleware('guest', ['except'=>'destroy']);
    }

    public function create() {
        return view('auth.create-login');
    }

    public function store() {
        $this->validate(request(), ['email'=>'required', 'password'=>'required']);
        $credentials = request()->only(['email', 'password']);
        if (!auth()->attempt($credentials)) {
            return redirect()->back()->withErrors(['message'=>'Bad credentials']);
        }
        return redirect('/posts');
    }

    public function destroy() {
       auth()->logout();
       return redirect('/posts');
    }
}
