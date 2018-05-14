<?php

namespace App\Http\Controllers;

use App\Solution;
use App\Task;
use App\TaskLevel;
use App\TaskTest;
use App\UserCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserTestController extends Controller
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
    public function create($solution_id,$level_id)
    {
        return view('solution.createTest',compact('level_id','solution_id'));
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
        //$input['user_id'] = Auth::id();
        $input['type'] = "Custom";
        $input['code'] = "";
        TaskTest::create($input);
        return redirect(url('solution/'.$request->solution_id.'/level/'.$request->level_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($solution_id,$level_id,$test_id)
    {
        $solution = Solution::findOrFail($solution_id);
        $task = Task::findOrFail($solution->id);
        $level = TaskLevel::where([['task_id',$task->id],['id',$level_id]])->first();
        $codes  =  UserCode::where([['solution_id',$solution->id],['user_id',Auth::id()]])->get();

        $actualTest = TaskTest::findOrFail($test_id);

        $tests = TaskTest::where([['level_id',$level_id]])->get();


        //check test
        $errorStatus =  Session::get('ErrorStatus-' . $solution_id);
        foreach ($tests as $test){
            if(Session::get('test-'.$solution_id.'-'.$test->name) ==  1){
                $test['success'] = 1;
            }
            else{
                $test['success'] = 0;
            }
        }

        return view('solution.showLevel',compact('solution','task','level','codes','actualTest','tests','errorStatus'));
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
        $actualTest = TaskTest::findOrFail($id);
        $actualTest->update($input);
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
