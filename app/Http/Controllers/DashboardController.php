<?php

namespace App\Http\Controllers;

use App\Material;
use App\Projects;
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
}
