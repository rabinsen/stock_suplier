<?php

namespace App\Http\Controllers;

use App\Projects;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Project;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Projects::all();

        return view('projects.projects', compact('projects'));
    }

    public function projects(){
        $users = Sentinel::getUserRepository()->all();
        return view('projects.addProjects', compact('users'));
    }

    public function postProjects(Request $request){
//        $users = Sentinel::getUserRepository()->all();
        $projects = new Projects();
        $projects->name = $request->project_name;
        $projects->description = $request->description;
        $projects->assign_to = $request->assign_to;
        $users = DB::table('users')->where('first_name',$projects->assign_to)->get()->pluck('id');
        foreach ($users as $user){
            $projects->user_id = $user;
        }
        $projects->save();
        Session::flash('success1', 'Properties were successfully Stored');
        return redirect('/projects');
    }

    public function edit($id){
        $project = Projects::find($id);
        $users = Sentinel::getUserRepository()->all();
        return view('projects.edit', compact('project', 'users'));
    }

    public function update(Request $request, $id){
        $projects = Projects::find($id);
        $projects->name = $request->name;
        $projects->description = $request->description;
        $projects->assign_to = $request->assign_to;
        $projects->save();
        return redirect('/projects');
    }
    public function delete($id){
        $projects = Projects::find($id);
        $projects->delete();
        Session::flash('success', 'The property was successfully Deleted');
        return redirect()->back();
    }


}
