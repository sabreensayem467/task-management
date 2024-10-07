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
        $task->task_name=$request->task_name;
        $task->description=$request->description;
        $task->start_date=$request->start_date;
        $task->due_date=$request->due_date;
        $task->status=$request->status;
        $task->task_image=$request->file('task_image')->getClientOriginalName();
        $task->attachment=$request->file('attachment')->getClientOriginalName(); 
        $task->save();
        //$this->uploadFile($request,'task_image','images/project');
       // $this->uploadFile($request,'attachment','images');
        return redirect('index-project');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task=Task::findOrfail($id);
        return view(' dashboard.tasks.my-task',compact('task'));
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
        return redirect('dahboard.tasks.index');
    }
}
