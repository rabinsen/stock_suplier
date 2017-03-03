<?php

namespace App\Http\Controllers;

use App\Category;
use App\Material;
use App\Projects;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.layouts');
    }

    public function material(){
        $projects = Projects::orderBy('created_at', 'desc')->get();
        return view('admin.materials.materials', compact('projects'));
    }

    public function addMaterial($id)
    {
        $project = Projects::find($id);
        return view('admin.materials.addMaterial', compact('project'));
    }

    public function sendMaterial(Request $request, $id)
    {
        $project = Projects::find($id);
        $name = $request->get('myName');
        $quantity = $request->get('myQuantity');
        $n = count($name);
        for ($i = 0; $i < $n; $i++) {
            $material = new Material();
            $material->name = $name[$i];
            $material->projects_id = $project->id;
            $material->quantity = $quantity[$i];
            $material->save();
        }
        return redirect('/adminMaterials');
    }

    public function viewStatus($id){
        $project = Projects::find($id);
        $materials = Material::where('projects_id', $project->id)->get();
        return view('admin.materials.viewStatus', compact('materials'));
    }

    public function adminProgress(){
        $projects = Projects::all();
        return view('admin.progress.getProgress', compact('projects'));
    }

    public function adminDisplayProgress($id){
        $project= Projects::find($id);
        $categories= Category::where('projects_id', $project->id)->get();
        $chart = Charts::create('bar', 'highcharts')
            ->title('Progress Chart')
            ->elementLabel('Percentage')
            ->labels($categories->pluck('name'))
            ->values($categories->pluck('percentage'))
            ->responsive(true);
        return view('admin.progress.displayProgress', compact('project', 'chart'));
    }
}
