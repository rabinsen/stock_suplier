<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;



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
        else {
            $slug = Sentinel::getUser()->roles()->first()->slug;
            if ($slug == 'admin') {
                return redirect('/dashboard');
            } elseif ($slug == 'project_manager') {
                return redirect('/mdashboard');
            }
        }
    }

    public function logout(){
        Sentinel::logout();
        return redirect('/login');
    }
}
