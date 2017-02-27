<?php

namespace App\Http\Controllers;

use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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

    public function editUser($id){
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function updateUser(Request $request, $id){
        $user = Sentinel::findById($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->save();
        return redirect('/users');
    }
    public function delete($id){
        $user = Sentinel::findById($id);
        $role = DB::table('role_users')->where('user_id', $id)->first();
        $user->delete();
        Session::flash('success', 'The property was successfully Deleted');
        return redirect()->back();

    }
}
