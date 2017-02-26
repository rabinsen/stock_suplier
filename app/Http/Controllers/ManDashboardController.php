<?php

namespace App\Http\Controllers;

use App\Category;
use App\Progress;
use App\Projects;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function postProgress(Request $request, $id)
    {
        $project = Projects::find($id);
        $tasks = $request->get('myTask');
        $percentages = $request->get('myPercentage');
        $n = count($tasks);
        for($i=0;$i<$n;$i++) {
            $category = new Category();
            $category->name = $tasks[$i];
            $category->project_id = $project->id;
            $category->percentage = $percentages[$i];
            $category->save();
        }
        return redirect('/managerProjects');
    }
}
