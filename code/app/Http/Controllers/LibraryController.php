<?php

namespace App\Http\Controllers;
use App\Trainer;
use App\library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    {
        $request->validate([

            "bookname"=>'required',
            "file"=>'required|mimes:pdf,doc,docx,xlx,csv|max:30000',
            "Trainername"=>'required',
            "desc"=>'required',
            "image"=>'required|mimes:jpeg,jpg,png,gif|max:600000'

        ]
    
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showallbooks()

    {
        
        $download=library::paginate(9);
        //    $download=DB::table('libraries')->get();
        return view('Publicsite.Front-end.Resourse',compact('download'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {$this->index($request);
        if($request->hasFile('file')){
            $file=$request->file('file');
            $ext=$file->getClientOriginalExtension();
            $filenames="file_book" .'_'.time().'.'. $ext ;
          $path=  $file->move('libraryfilles', $filenames);}



    //     $fileName = time().'.'.$request->file->extension();  
   
    // $request->file->move(public_path('uploads'), $fileName);

    

        
        if($request->hasFile('image')){
        $file=$request->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename="cover_Image" .'_'.time().'.'. $ext ;
        $file->move('libraryimages', $filename);}


        
        library::create([
            'bookName'=>$request->bookname,
            'filebook'=>$filenames,
            'tutor_id'=>$request->Trainername,
            'description'=>$request->desc,
            'image'=>$filename
        

        ]);return  redirect('library')->with(['status' => ' Create successfully new resource.']);
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\library  $library
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $trainer=Trainer::paginate(5);
        $showall= library::paginate(5);


        return view('/Dashboard/Backend/library',compact('showall','trainer'));

    }
  public function download(Request $request){
   
    $download=DB::table('libraries')->get()->paginate(9);
    return redirect('/Resourse',compact('download'));

  }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { $trainer=Trainer::all();
        $show=library::where('id',$id)->get()->first();
        return view('/Dashboard/Backend/libraryedit', compact('show','trainer'));

    }


    public function search(){
        $search_text=$_GET['search'];
        $download=library::where('bookName', 'LIKE', '%' . $search_text . '%')->paginate(9);
       return view('/Publicsite/Front-end/Resourse',compact('download'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $this->index($request);


    if($request->hasFile('file')){
        $file=$request->file('file');
        $ext=$file->getClientOriginalExtension();
        $filenames="file_book" .'_'.time().'.'. $ext ;
      $path=  $file->move('libraryfilles', $filenames);}


    if($request->hasFile('image')){
        $file=$request->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename="cover_Image" .'_'.time().'.'. $ext ;
        $file->move('libraryimages', $filename);}

        library:: where('id',$id)->update([
            'bookName'=>$request->bookname,
            'filebook'=>$filenames,
            'tutor_id'=>$request->Trainername,
            'description'=>$request->desc,
            'image'=>$filename
        

        ]);
             
        return  redirect('library')->with(['status' => ' Update successfully  the resource.']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        library::where('id',$id)->delete();
        return  redirect('library')->with(['status' => ' Delete successfully   resource.']);
    }
   
}
