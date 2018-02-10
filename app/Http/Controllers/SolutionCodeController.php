<?php

namespace App\Http\Controllers;

use App\Http\Requests\SolutionCodeCreateRequest;
use App\SolutionCode;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SolutionCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solutions = SolutionCode::all();

       return view('solutionCode.index',compact('solutions'));
       // return "tomas";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $users = User::pluck('name','id');
        return view('solutionCode.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolutionCodeCreateRequest $request)
    {
        $input = $request->all();
        $input['task_id'] = 0;
        $user = Auth::user();
        $user->SolutionCode()->create($input);

       return redirect("/user/solution");
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
