<?php

namespace App\Http\Controllers;
use App\Video;
use App\Course;
use App\Trainer;
use DB;
use Illuminate\Http\Request;

class CourseController extends Controller


{


    
    // public function __construct()
    // {
    //     $this->middleware('auth:trainer');
        
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    { $request->validate([
        "course"=>'required',
        "Trainer_Name"=>'required',
        "image"=>'required|mimes:jpeg,jpg,png,gif|max:10000',
        "Traineremail"=>'required',
         "Coursedeatials"=>'required',
        
        
       

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
            $file->move('Courseimages', $filename);
        }
        Course::create([
            "course_Name"=>$request->course,
            "email_id"=>$request->Traineremail,
            "trainer_id"=>$request->Trainer_Name,
             "Course_Image"=>$filename,
            
            "Course_deatials"=>$request->Coursedeatials,
          

        ]);

        return redirect('/Course')->with(['status' => ' Create successfully Course.']);







        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {   $trainer=Trainer::paginate(5);
         $courses= Course::paginate(5);

       
        return view('/Dashboard/Backend/Course',compact('courses','trainer'));
    }


    public function search(Request $request)

    { 
        

        $search_text=$_GET['search'];
        $Courses=Course::where('course_Name', 'LIKE', '%' . $search_text . '%')->paginate(9);
       return view('/Publicsite/Front-end/Courses',compact('Courses'));
    }

    public function showall(Course $course)
    {   $Trainer=Trainer::paginate(9);
        $video=Video::paginate(9);
         $Courses= Course::paginate(9);

       
        return view('Publicsite/Front-end/Courses',compact('Courses','trainer','video'));
    }

    public function showvideo($Course_id){
    //     $course=Video::where('Course_id',$id)->get();
    //     $id=$id;
    // return redirect('Allvideo',compact('course','id'));

        // $cat=DB::table('courses')->where('course_Name' ,$course_Name)->value('id');
        // $Courses=DB::table(' videos')->where('Course_id' ,$cat)->get();
        // return view('Publicsite/Front-end/Video', compact('Courses'));
       
        // $show=VideoVideo::where('Course_id',$id)->get();
        //  $Courses= Course::all();
       
            return view('Publicsite/Front-end/Video', array(
                
                'videos' => Video::findAll(['courses' => $Course_id]),
              
                
            ));
        

    //     $allvideos=Video::where('Course_id',$id)->orderByDesc('id')->get();
    //     $trainer=Trainer::all();
    //     $cousres=Course::find($id)->$id;
       
    //  return view('Publicsite.Front-end.Videos',compact('trainer','cousres','allvideos'));
        
    
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $trainer=Trainer::all();
        $show=Course::where('id',$id)->get()->first();
        return view('/Dashboard/Backend/courseedit',compact('show','trainer'));
    }

    



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {


        $this->index($request);

        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename="cover_Image" .'_'.time().'.'. $ext ;
            $file->move('Courseimages', $filename);
        }
        Course::where('id',$id)->update([


            "course_Name"=>$request->course,
            "email_id"=>$request->Traineremail,
            "trainer_id"=>$request->Trainer_Name,
            "Course_deatials"=>$request->Coursedeatials,
            "Course_Image"=>$filename,

        ]);

        return redirect('/Course')->with(['status' => ' Update successfully Course.']);

      
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Course::where('id',$id)->delete();
        return redirect('/Course')->with(['status' => ' Delete successfully Course.']);
    }
}
