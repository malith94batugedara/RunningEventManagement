<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Run;
use App\Models\Enroll;
Use Carbon\Carbon;

use Illuminate\Http\Request;

class RunnerEnrollController extends Controller
{
    public function create(){
        $users =User::all();
        $runs = Run::all();
        return view('runner.enroll.create',compact('users','runs'));
    }
    public function store(Request $request){

      
        $enroll=new Enroll;
        // if($enroll->run->start > Carbon::now() && $user->id->has()){
        $enroll->runner_id=$request['runner_id'];
        $enroll->run_id=$request['run_id'];
    // }

        $enroll->save();
        return redirect(route('runner.enroll'))->with('message','Enroll Added Successfully');
        

   }
   public function result(){
       return view('runner.result');
   }

   public function createResult(){
    $users =User::all();
    return view('runner.result.create',compact('users'));  
   }
}
