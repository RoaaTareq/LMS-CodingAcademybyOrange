<?php

namespace App\Http\Controllers;

use App\Task;
use App\Student;
use Illuminate\Http\Request;
use Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
        
        public function index($request)
    
        {
            $request->validate([ 
                "message"=>'required',
                'task'=>'required',
                'file'=>'required'
             
            ]);
           
        }
    

    // public function __construct()
    // {
    //     $this->middleware('auth:student');
        
    // }
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

    {    $this->index($request);
  
            if($request->hasFile('file')){
            $file=$request->file('file');
            $ext=$file->getClientOriginalExtension();
            $files="file_book" .'_'.time().'.'. $ext ;
          $path=  $file->move('taskfiles', $files);}
        //   $student = auth()->student();
        Task::create([
            'task'=>$request->task,
            'message'=>$request->message,
            'document'=>$files,
            'student_id'=>auth()->guard('student')->id(),

        ]);
      
        return redirect('/task');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    { 
        $task=TasK::all();
        return view('Publicsite.Front-end.task');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function showall()

    {
        
        $task=TasK::paginate(5);
        $student=Student::paginate(5);
        return view('Dashboard.Backend.task',compact('task','student'));
    }

    public function download(){
        $task=DB::table('tasks')->get();
        return redirect('/tasks',compact('task'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
