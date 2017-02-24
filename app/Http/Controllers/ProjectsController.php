<?php

namespace App\Http\Controllers;

use App\Projects;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Projects::all();

        return view('projects.projects', compact('projects'));
    }

    public function projects(){
        $users = User::all();
    return view('projects.addProjects', compact('users'));
    }

    public function postProjects(Request $request){
        $projects = new Projects();
        $projects->name = $request->project_name;
        $projects->description = $request->description;
        $projects->assign_to = $request->assign_to;
        $projects->save();
        Session::flash('success1', 'Properties were successfully Stored');
        return redirect()->back();
    }


}
