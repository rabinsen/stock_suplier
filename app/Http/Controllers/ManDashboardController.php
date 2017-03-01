<?php

namespace App\Http\Controllers;

use App\Category;
use App\Material;
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
        $projects = Projects::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('manager.projects.projects', compact('projects'));
    }
    public function getProgress(){
        $user = Sentinel::getUser();
        $projects = Projects::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('manager.projects.getProgress', compact('projects'));
    }

    public function progress($id){
        $project = Projects::find($id);
        return view('manager.projects.progress', compact('project'));
    }

    public function postProgress(Request $request, $id)
    {
        $project = Projects::find($id);
//        dd($catId = DB::table('categories')->where('projects_id',$id)->get()->pluck('id'));
        $tasks = $request->get('myTask');
        $percentages = $request->get('myPercentage');
        $n = count($tasks);
        for ($i = 0; $i < $n; $i++) {
            $category = new Category();
            $category->name = $tasks[$i];
            $category->projects_id = $project->id;
            $category->percentage = $percentages[$i];
            $category->save();
        }
        return redirect('/managerProjects');


    }

//    public function postProgress(Request $request, $id)
//    {
//        $project = Projects::find($id);
//        $category = $project->categories;
//        //to find the category that belongs to particular project in array
//
//        $test=0;
//        $tasks = $request->get('myTask');
//
//        $percentages = $request->get('myPercentage');
//
//        $n = count($tasks);
//
//
//
//
//        for($i=0;$i<$n;$i++) {
//
//            //here single denotes to get single Category
//            foreach ($category as $single){
//                if($single->name==$tasks[$i]) $test++;
//            }
//            // return $test;
//
//            if($test!=0) {   // checking if the category is already present
//
//
//                $category->name=$tasks[$i];
//                $category->percentage=$percentages[$i];
//
//
////
////
//            }
//            $category=new Category();
//            $category->name=$tasks[$i];
//            $category->percentage=$percentages[$i];
//            $category->projects_id=$id;
//            $category->save();
//
////
////            else{
////
////            }
////
//
//
//        } //end of for loop
//
//
//
//
//
//
//
//        return redirect('/managerProjects');
//    }


    public function material(){
        $user = Sentinel::getUser();
        $projects = Projects::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('manager.material.materials', compact('projects'));
    }

    public function viewMaterials($id){
        $project = Projects::find($id);

        $materials = Material::where('projects_id', $project->id)->get();
        $count = Material::where('projects_id', $project->id)->count();
        return view('manager.material.viewMaterials', compact('materials', 'count'));
    }

    public function checkReceipt($id){
        $material = Material::find($id);
        $material->flag = 1;
        $material->save();
        return redirect()->back();
    }

    public function displayProgress($id){
        $project= Projects::find($id);
    }
}
