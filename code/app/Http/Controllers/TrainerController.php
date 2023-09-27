<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Trainer;
use App\Event;

use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:student')->only('home');
        // $this->middleware('auth:admin')->expect('home');
        
    }


   
     
    public function index($request)
    {
        $request->validate([
"NameTrainer"=>'required|max:20',
"EmailTranier"=>'required|email|regex:/(.+)@(.+)\.(.+)/i',
"phoneTrainer"=>'required|regex:/^[077]([0-9\s\-\+\(\)]*)$/|min:10',
"EductionTrainer"=>'required',
"Birthday"=>'required',
"password"=>'required|confirmed|min:10|max:16',

"image"=>'required|mimes:jpeg,jpg,png,gif|max:30000',

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
   
    {  $this->index($request);
        
        if($request->hasFile('image')){
        $file=$request->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename="cover_Image" .'_'.time().'.'. $ext ;
        $file->move('Trainerimages', $filename);
    }
        
        Trainer::create([
            "name_Trainer"=>$request->NameTrainer,
            "email_Trainer"=>$request->EmailTranier,
            "phone_Trainer"=>$request->phoneTrainer,
            "eduction_Trainer"=>$request->EductionTrainer,
          
            "Birthday_Trainer"=>$request->Birthday,
            "password"=>Hash::make($request->password),
            "image"=>$filename
        ]);
        return redirect('/Trainer')->with(['status' => ' Create successfully Trainer.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
     $showall=Trainer::paginate(4);
     return view('/Dashboard/Backend/Trainer',compact('showall'));
    }
    public function showall()
    {
        $show=Event::all();
          $show_trainer=Trainer::all();
     return view('Publicsite/Front-end/home',compact('show_trainer','show'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $show=Trainer::where('id',$id)->get()->first();
          return view('/Dashboard/Backend/Traineredit',compact('show'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)


    { $this->index($request);
        
        if($request->hasFile('image')){
        $file=$request->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename="cover_Image" .'_'.time().'.'. $ext ;
        $file->move('Trainerimages', $filename);
    }
        
        Trainer::where('id',$id)->update([
            "name_Trainer"=>$request->NameTrainer,
            "email_Trainer"=>$request->EmailTranier,
            "phone_Trainer"=>$request->phoneTrainer,
            "eduction_Trainer"=>$request->EductionTrainer,
           
            "Birthday_Trainer"=>$request->Birthday,
            "password"=>$request->password,
            "image"=>$filename

        ]);
        return redirect('/Trainer')->with(['status' => ' Update successfully Trainer.']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    { $del=Trainer::where('id',$id)->delete();
        return redirect('/Trainer')->with(['status' => ' Delete successfully Trainer.']);

        //
    }
}
