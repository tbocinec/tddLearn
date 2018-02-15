<?php

namespace App\Http\Controllers;

use App\Solution;
use App\Task;
use App\TaskLevel;
use App\TaskTest;
use App\UserCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCodeController extends Controller
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
    public function create()
    {

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
        $input['user_id'] = Auth::id();
        UserCode::create($input);
        return redirect(url()->previous());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($solution_id,$level_id,$code_id)
    {
        $solution = Solution::findOrFail($solution_id);
        $task = Task::findOrFail($solution->id);
        $level = TaskLevel::where([['task_id',$task->id],['id',$level_id]])->first();
        $codes  =  UserCode::where([['solution_id',$solution->id],['user_id',Auth::id()]])->get();
        $actualCode = UserCode::findOrFail($code_id);

        $tests = TaskTest::where([['level_id',$level_id]])->get();

        return view('solution.showLevel',compact('solution','task','level','codes','actualCode','tests'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $actualCode = UserCode::findOrFail($id);
        $actualCode->update($input);
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
