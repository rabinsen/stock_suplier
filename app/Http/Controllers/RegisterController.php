<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('authentication.register');
    }

    public function postRegister(Request $request){
        $user = Sentinel::registerAndActivate($request->all());
        return redirect('/');
    }
}
