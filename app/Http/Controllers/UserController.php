<?php

namespace App\Http\Controllers;

use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = Sentinel::getUserRepository()->all();
//        dd(Sentinel::getUser()->roles()->first()->slug);
        return view ('admin.users', compact('users'));

    }
    public function addUser(){
        return view('user.addUser');
    }
    public function postUser(Request $request){
            $user = Sentinel::registerAndActivate($request->all());
            $role = Sentinel::getRoleRepository();
            $role->name = $request->role;
            if ($role->name == 'admin')
            {
                $role = Sentinel::findRoleBySlug('admin');
                $role->users()->attach($user);
            }
            elseif ($role->name == 'project_manager')
            {
                $role = Sentinel::findRoleBySlug('project_manager');
                $role->users()->attach($user);
            }
            elseif  ($role->name == 'stock_holder')
            {
                $role = Sentinel::findRoleBySlug('stock_holder');
                $role->users()->attach($user);
            }
            return redirect('/users');

    }
}
