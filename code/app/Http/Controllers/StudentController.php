<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Student;
use App\Profile;
use Illuminate\Http\Request;

class StudentController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth:student')->only('Profile');
        // $this->middleware('auth:admin')->except('Profile');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    {
       $request->validate([
           "studentname"=>'required|max:20',
           "studentemail"=>'required|email|regex:/(.+)@(.+)\.(.+)/i',
           "studentphone"=>'required|regex:/^[077]([0-9\s\-\+\(\)]*)$/|min:10',
           "studenteduction"=>'required',
           "studentday"=>'required',
           "password"=>'required|confirmed|min:10 |max:16',
           "image"=>'required|mimes:jpeg,jpg,png,gif|max:10000',
      






       ]);

        //
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
    {$this->index($request);



        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename="cover_Image" .'_'.time().'.'. $ext ;
            $file->move('studentimages', $filename);

        }
        Student::create([

"student_name"=>$request->studentname,
"student_email"=>$request->studentemail,
"phone_student"=>$request->studentphone,
"eduction_student"=>$request->studenteduction,
"Birthday"=>$request->studentday,
"password"=>Hash::make($request->password),
"student_image"=>$filename







        ]);

        return redirect('/student')->with(['status' => ' Create successfully Student.']);
        //
    }
   
    public function Profile($id){
        $student=Student::find($id);


        if($student->id ==Auth::id()){
            return view('Publicsite.Front-end.Profile',compact('student'))->withUser($student);
        
        } else {
            return redirect()->back();
        }

         
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        $showall=Student::paginate(5);
        return view('/Dashboard/Backend/student',compact('showall'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $showall=Student::where('id',$id)->get()->first();
        return view('/Dashboard/Backend/studentedit',compact('showall'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->index($request);

        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename="cover_Image" .'_'.time().'.'. $ext ;
            $file->move('studentimages', $filename);

        }
        
        Student::where('id',$id)->update([
            
"student_name"=>$request->studentname,
"student_email"=>$request->studentemail,
"phone_student"=>$request->studentphone,
"eduction_student"=>$request->studenteduction,

"Birthday"=>$request->studentday,
"password"=>Hash::make($request->password),
"student_image"=>$filename


        ]);
        return  redirect('/student')->with(['status' => ' Update successfully Student.']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
   

      public function destroy($id)
        {
            $del=Student::where('id',$id)->delete();
        return redirect('/student')->with(['status' => ' Delete successfully Student.']);;
        }
     
    
}
