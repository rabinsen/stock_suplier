<?php

namespace App\Http\Controllers;

use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view ('admin.users', compact('users'));

    }
    public function addUser(){
        return view('user.addUser');
    }
    public function postUser(Request $request){
            $user = Sentinel::registerAndActivate($request->all());
            return redirect('/users');

    }
}
