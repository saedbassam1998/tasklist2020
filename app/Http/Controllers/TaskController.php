<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Task;


class TaskController extends Controller
{

    public function index (){

       
       // $tasks =DB::table('tasks')->get(); 
       $tasks =Task::orderBy('created_at')->get();
        return view('tasks.index',compact('tasks'));
        
    }

    public function show ($id){

      //  $task =DB::table('tasks')->find($id);
      $task=Task::where('id',$id) ->get();
        return view ('tasks.show',compact('task'));
        
    }  

    public function store (Request $request){
       
        $request->validate([
            'name'=>'required|min:10|max:255',

        ]);

        $task=new Task();
        $task->name=$request->name;
        $task->save();
       
         return redirect()->back();
    } 

    public function destroy ($id){

       // DB::table('tasks')->where('id','=',$id)->delete();

       $task=Task::find($id);
        
       $task->delete();

       return redirect()->back();
        
    }

    public function edit ($id){
       
        $edit = Task::find($id);
        $tasks = Task::orderBy('created_at')->get();
        return view('tasks.edit',compact('tasks','edit'));   
    }

    public function Update(Request $request,$id){ 

       
        $tasks = Task::find($id);
        $tasks->name = $request->name;
        $tasks->updated_at = now();
        $tasks->save();

        return redirect('/');
        
    }

}