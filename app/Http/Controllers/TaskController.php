<?php

namespace App\Http\Controllers;

use Auth;
use App\Task;
use App\Folder;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTask;
use App\Http\Requests\EditTask;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Folder $folder)
    {
        $folders = Auth::user()->folders()->get();
        $tasks = $folder->tasks()->get();
        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $folder->id,
            'tasks' => $tasks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Folder $folder)
    {
        return view('tasks/create',[
            'folder' => $folder->id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Folder $folder, CreateTask $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->due_date = $request->due_date;
        $folder->tasks()->save($task);
        return redirect()->route('tasks.index', [
            'folder' => $folder->id,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Folder $folder, Task $task)
    {
        $this->checkRelation($folder, $task);
        return view('tasks/edit', [
            'folder' => $folder,
            'task' => $task,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Folder $folder, Task $task, EditTask $request)
    {
        $this->checkRelation($folder, $task);
        $task->title = $request->title;
        $task->status = $request->status;
        $task->due_date = $request->due_date;
        $task->save();
        return redirect()->route('tasks.index',[
            'folder' => $task->folder_id,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Folder $folder, Task $task)
    {
        $this->checkRelation($folder, $task);
        $current_folder = Auth::user()->folders()->first();
        $task->destroy($task->id);
        return redirect()->route('tasks.index', [
            'folder' => $folder,
        ]);
    }

    public function checkRelation(Folder $folder, Task $task)
    {
        if($folder->id !== $task->folder_id)
        {
            abort(404);
        }
    }
}
