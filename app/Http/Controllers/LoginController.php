<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Native\Facades\Sentinel;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('authentication.login');
    }

    public function postLogin(Request $request){
        $login = Sentinel::forceAuthenticate($request->all());
        if(!$login){
            return redirect('/login');
        }
        return redirect('/dashboard');
    }
}
