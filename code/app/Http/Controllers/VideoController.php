<?php

namespace App\Http\Controllers;
use App\Course;
use App\Trainer;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    {
        $request->validate([
            "videotitle"=>'required',
            "Coursename"=>'required',
            "Trainername"=>'required',
            "Video"=>'required|mimes:mov,mp4,wmv,flv,webm|max:50000',
            "desc"=>'required',
        ]);
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
        $this->index($request);
//  if($request->hasFile('video')){
//                 $video_tmp = Input::file('video');
//             $video_name = $video_tmp->getClientOriginalName();
//                 $video_path = '/Videoimages/';
//                 $video_tmp->move($video_path,$video_name);
//                 $videoName = $video_name;
//             }else if(!empty($data['current_video'])){
//                 $videoName = $data['current_video'];
//             }else{
//                 $videoName = '';
//             }


        if($request->hasFile('Video')){
            $file=$request->file('Video');
            $ext=$file->getClientOriginalExtension();
            $filename="cover_Image" .'_'.time().'.'. $ext ;
            $file->move('Videoimages', $filename);}

        // $file = $request->Video;
        // $data['Video'] = 'Videoimages/'.'Video_'.time().'.'.$file->getClientOriginalExtension();
        // $file->move(public_path('Videoimages'),  $data['Video']);
    
            // if($request->hasFile('Video')){
            //     $filenameWithExt= $request->file('Video')->getClientOriginalName();
            //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //     $extension = $request->file('Video')->getClientOriginalExtension();
            //     $fileNameToStore = $filename. '_'.time().'.'.$extension;
            //     $path = $request->file('Video')->storeAs('public/Videoimages/',$fileNameToStore);
            // }else{
            //     $fileNameToStore = 'noimage.jpg';
            // }
    
        Video::create([
"Video_Name"=>$request->videotitle,
"Video_description"=>$request->desc,
"coach_id"=>$request->Trainername,
"Course_id"=>$request->Coursename,
"video"=>  $filename,

        
    
        ]);

        return redirect('/videos')->with(['status' => ' Create successfully Video']);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $trainer=Trainer::all();
        $cousres=Course::all();
     $showall= Video::paginate(5);
    


        return view('/Dashboard/Backend/video',compact('trainer','cousres','showall'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trainer=Trainer::all();
        $cousres=Course::all();
     $show= Video::where('id',$id)->get()->first();
     return view('/Dashboard/Backend/videoedit',compact('trainer','cousres','show'));
    }


    public function Showall($id)
    { 
        $trainer=Trainer::all();
        
   

        $allvideos=Video::where('Course_id',$id)->paginate(12);
        $video = Video::find($id);
        $courses=Course::find( $video);
     
      
     

       
       
     return view('Publicsite.Front-end.Videos',compact('trainer','cousres','allvideos'));
    }

    public function Showcourses()
    {  
     return view('Publicsite.Front-end.Videos');
    }


    public function search(){
        $search_text=$_GET['search'];
        $allvideos=Video::where('Video_Name', 'LIKE', '%' . $search_text . '%')->paginate(9);
       return view('/Publicsite/Front-end/Videos',compact('allvideos'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->index($request);


    //     $fileName = time().'.'.$request->file->extension();  
   
    // $request->file->move(public_path('uploads'), $fileName);

        if($request->hasFile('Video')){
            $file=$request->file('Video');
            $ext=$file->getClientOriginalExtension();
            $filename="cover_Image" .'_'.time().'.'. $ext ;
            $file->move('Videoimages', $filename);}

            Video::where('id',$id)->update([

                "Video_Name"=>$request->videotitle,
"Video_description"=>$request->desc,
"coach_id"=>$request->Trainername,
"Course_id"=>$request->Coursename,
"video"=>$filename
            ]);

            return redirect('/videos')->with(['status' => ' Update successfully Video']);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Video::where('id',$id)->delete();
        return redirect('/videos')->with(['status' => 'Delete successfully  Video.']);
    }
}
