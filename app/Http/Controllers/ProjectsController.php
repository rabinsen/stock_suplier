<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        return view('projects.projects');
    }

    public function projects(){
    return view('projects.addProjects');
}


}
