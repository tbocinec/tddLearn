<?php

namespace App\Http\Controllers;

use App\Task;
use App\TaskLevel;
use App\TaskTest;
use Illuminate\Http\Request;

class TaskTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idTask,$idLevel)
    {
        $task = Task::findOrFail($idTask);
        $taskLevel = TaskLevel::findOrFail($idLevel);

        return view('admin.test.create',compact('task','taskLevel'));
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

        TaskTest::create($input);
        return redirect(url()->previous());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return false;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idTask,$idLevel,$id){

        $task = Task::findOrFail($idTask);
        $taskLevel = TaskLevel::findOrFail($idLevel);
        $test = TaskTest::findOrFail($id);

        return view('admin.test.edit',compact('task','taskLevel','test'));

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
        $input= $request->all();
        $test = TaskTest::findOrFail($id);
        $test->update($input);
        return redirect(url()->previous());
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
