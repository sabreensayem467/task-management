<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Project;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project=Project::get();
        return view('projects.index',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('projects.create-project');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $project= new Project();
        $project->name=$request->name;
        $project->description=$request->description;
        $project->save();
       
        return redirect('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project=Project::findOrfail($id);
        return view('projects.my-project',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project=Project::findOrfail($id);
        return view('projects.edit-project',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        
        Project::where('id',$id)->update([
            
            'name' =>  $request->name,
            'description'=> $request->description,
        ]);
        return redirect('projects.update-project');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request , string $id)
    {
        $id = $request->id;
        Project::where('id',$id)->delete();
        return redirect('projects.index');
    }
}
