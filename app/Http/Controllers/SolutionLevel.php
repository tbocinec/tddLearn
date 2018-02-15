<?php

namespace App\Http\Controllers;

use App\Solution;
use App\Task;
use App\TaskLevel;
use App\TaskTest;
use App\UserCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SolutionLevel extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($solution_id,$level_id)
    {
        $solution = Solution::findOrFail($solution_id);
        $task = Task::findOrFail($solution->id);
        $level = TaskLevel::where([['task_id',$task->id],['id',$level_id]])->first();
        $codes  =  UserCode::where([['solution_id',$solution->id],['user_id',Auth::id()]])->get();

        $tests = TaskTest::where([['level_id',$level_id]])->get();


        return view('solution.showLevel',compact('solution','task','level','codes','tests'));
    }

    public function build($solution_id,$level_id)
    {
        $parseCode = "";

        $codes  =  UserCode::where([['solution_id',$solution_id],['user_id',Auth::id()]])->get();

        foreach ($codes as $code){
            if($code['code'] != null){
                $parseCode .= $code['code'];
                $parseCode .=  "\xA";
            }

        }
        Storage::put('/userTests/usercode.py', $parseCode);

        $tests = TaskTest::where([['level_id',$level_id]])->get();

        $errorStatus = "";
        foreach ($tests as $test){
            if($test['code'] != null){
                $testCode = $test['code'];
                Storage::put('/userTests/test.py', $testCode);

                $retExec = $this->my_exec('cd ../storage/app/userTests/; python3 -m unittest test.py');

                if($retExec['return'] == 0){
                    $test['success'] = 1;

                }
                else{
                    $test['success'] = 0;
                    $errorStatus .= $test->name.' <br> '.$retExec['stderr'].'<br><br>';
                }

            }

        }


        $solution = Solution::findOrFail($solution_id);
        $task = Task::findOrFail($solution->id);
        $level = TaskLevel::where([['task_id',$task->id],['id',$level_id]])->first();
        $codes  =  UserCode::where([['solution_id',$solution->id],['user_id',Auth::id()]])->get();


        return view('solution.showLevel',compact('solution','task','level','codes','tests','errorStatus'));

    }
    public function my_exec($cmd, $input='')
    {
        $proc=proc_open($cmd, array(0=>array('pipe', 'r'), 1=>array('pipe', 'w'), 2=>array('pipe', 'w')), $pipes);
        fwrite($pipes[0], $input);
        fclose($pipes[0]);
        $stdout=stream_get_contents($pipes[1]);fclose($pipes[1]);
        $stderr=stream_get_contents($pipes[2]);fclose($pipes[2]);
        $rtn=proc_close($proc);
        return array('stdout'=>$stdout,
            'stderr'=>$stderr,
            'return'=>$rtn
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
