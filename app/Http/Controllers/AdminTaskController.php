<?php

namespace App\Http\Controllers;

use App\CategoryTask;
use App\ProgramingLanguage;
use App\Task;
use Illuminate\Http\Request;

class AdminTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('admin.task.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programingLanguage = ProgramingLanguage::pluck('name','id');
        $categoryTask = CategoryTask::pluck('name','id');
        return view('admin.task.create',compact(['categoryTask','programingLanguage']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input= $request->all();

        Task::create($input);
        return redirect('/admin/task');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programingLanguage = ProgramingLanguage::pluck('name','id');
        $categoryTask = CategoryTask::pluck('name','id');


        $task = Task::findOrFail($id);
        return view('admin.task.show',compact('task','programingLanguage','categoryTask'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programingLanguage = ProgramingLanguage::pluck('name','id');
        $categoryTask = CategoryTask::pluck('name','id');


        $task = Task::findOrFail($id);
        return view('admin.task.edit',compact('task','programingLanguage','categoryTask'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $input= $request->all();
        $task->update($input);
        return redirect('/admin/task');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
