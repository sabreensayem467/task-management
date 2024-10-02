<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task =Task::get();
        return view('dashboard.home.index',compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.tasks.create-task');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $task= new Task();
        $task->title=$request->title;
        $task->description=$request->description;
        $task->attachment=$request->attachment;
        $task->task_image=$request->task_image;
        $path = 'images';
        $fileName = $this->uploadFile($request->photo, 'images');

        $request->photo->move($path, $fileName );
       
        $task->status=$request->status;

        $task->save();
       
        return redirect('dashbord.tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task=Task::findOrfail($id);
        return view('tasks.my-task',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task=Task::findOrfail($id);
        return view('dashbord.tasks.edit-task',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Task::where('id',$id)->update([
            
            'title' =>  $request->name_task,
            'description'=> $request->description,
            'attachment'=> $request->attachment,
            'task_image'=> $request->task_image,
            'status'=> $request->status,
            
            ]);
            return redirect('tasks.update-task');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request ,string $id)
    {
        $id = $request->id;
        Task::where('id',$id)->delete();
        return redirect('dahbord.tasks.index');
    }
}
