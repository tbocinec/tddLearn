<?php

namespace App\Http\Controllers;

use App\Language;
use App\Solution;
use App\Task;
use App\TaskLevel;
use App\TaskTest;
use App\User;
use App\UserCode;
use Carbon\Carbon;
use GuzzleHttp\Exception\ConnectException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use function PHPSTORM_META\type;

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


        $actualCode = UserCode::where([['solution_id',$solution->id],['user_id',Auth::id()]])->first();

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

        return view('solution.showLevel',compact('solution','task','actualCode','level','codes','tests','errorStatus'));
    }

    public function build($solution_id,$level_id)
    {
        $parseCode = "";
        $output = ["name" =>"test-test",
            "language" => "python3",
            "user" => Auth::id(),
            "code" => array(),
            "test" => array(),

        ];

        $errorStatus = "";
        $serverError = false;


        $solution = Solution::findOrFail($solution_id);
        $task = Task::findOrFail($solution->id);
        $level = TaskLevel::where([['task_id',$task->id],['id',$level_id]])->first();
        $codes  =  UserCode::where([['solution_id',$solution->id],['user_id',Auth::id()]])->get();
        $programingLanguage  = Language::findOrFail($task->programingLanguage_id);
        $tests = TaskTest::where([['level_id',$level_id]])->get();
        $actualTime = Carbon::now();

        foreach ($codes as $code){
            if($code['code'] != null){
                $output["code"][$code['id']] =   $code['code'];
            }
        }

        foreach ($tests as $test){
            $output["test"][$test['name']] =  $test['code'];

        }

        try {
            $client = new Client(['http_errors' => false]);
            $res = $client->request('POST', $programingLanguage->compiler_url.'/code', [
                'auth' => [$programingLanguage->user, $programingLanguage->password],
                'form_params' => [
                    'code' => json_encode($output)
                ]
            ]);
            if ($res->getStatusCode() != 200) {
                $serverError = true;
            } else {
                Session::put('lastbuild-' . $solution_id, $actualTime->toDateTimeString());
                $resString = (String)$res->getBody()->getContents();
                $testResut = (json_decode($resString)->result)[0];

                $tr = [];
                $errorStatus = "";


                foreach ($testResut as $tn => $tv) {
                    $tr[$tn] = $tv[0];
                    if ($tv[0] != "0") {
                        $errorStatus .= $tn . "<br>" . $tv[0] . "<br><br><br>";

                    }

                    foreach ($tests as $test) {
                        if (substr($tn, 5) == $test->name) {
                            if ($tv[0] == "0") {
                                //$test['success'] = 1;
                                Session::put('test-' . $solution_id . '-' . $test->name, 1);
                            } else {
                                //$test['success'] = 0;
                                Session::put('test-' . $solution_id . '-' . $test->name, 0);
                            }
                            break;
                        }
                    }
                }
                Session::put('ErrorStatus-' . $solution_id, $errorStatus);
            }
        }
        catch (ConnectException $e  ){
            $serverError = true;
        }



        $errorStatus =  Session::get('ErrorStatus-' . $solution_id);
        foreach ($tests as $test){
            if(Session::get('test-'.$solution_id.'-'.$test->name) ==  1){
                $test['success'] = 1;
            }
            else{
                $test['success'] = 0;
            }
        }


        return view('solution.showLevel',compact('solution','task','level','codes','tests','errorStatus','testResut','serverError'));

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
