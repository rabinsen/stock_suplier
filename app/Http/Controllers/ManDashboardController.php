<?php

namespace App\Http\Controllers;

use App\Projects;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ManDashboardController extends Controller
{
    public function index(){
        return view('manager.layouts');
    }

    public function projects(){
        $user = Sentinel::getUser();
        $projects = Projects::where('user_id', $user->id)->get();
        return view('manager.projects.projects', compact('projects'));
    }

    public function progress($id){
        $project = Projects::find($id);
        return view('manager.projects.progress', compact('project'));
    }

    public function postProgress(){
        foreach (Input::get('task') as $key => $val) {
            $member = new Member;
            $member->first = Input::get("member_first.$key");
            $member->save();
        }
    }
}
