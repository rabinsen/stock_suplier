<?php

namespace App\Http\Controllers;

use App\Projects;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

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

    public function progress(){
        return view('manager.projects.progress');
    }
}
