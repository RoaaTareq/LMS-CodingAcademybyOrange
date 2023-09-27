<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
    
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request){
    $request->validate([
        'user'=>'required|max:20',
        'email'=>'required|email|regex:/(.+)@(.+)\.(.+)/i',
        'phone'=>'required|regex:/^[077]([0-9\s\-\+\(\)]*)$/|min:10',
        'password'=>'required|confirmed|min:10 |max:16',
        'image'=>'required|mimes:jpeg,jpg,png,gif|max:10000'

    ]);
   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    { 
    }

    


    public function show(Admin $admin)
    {
        $show = admin::paginate(5);
        return view('/Dashboard/Backend/admin', compact('show'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     
    public function store(Request $request){
      $this->index($request);


        

        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename="cover_Image" .'_'.time().'.'. $ext ;
            $file->move('adminimages', $filename);

        }

        admin::create([
            "admin_name"=>$request->user,
            "admin_phone"=>$request->phone,
            "admin_email"=>$request->email,
           
            
            "password"=> Hash::make($request->password),
            "admin_image"=>$filename,

        ]);

        return redirect('/admin')->with(['status' => ' Create successfully Admin.']);

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $showall=admin::where('id',$id)->get()->first();
        return view('/Dashboard/Backend/adminedit',compact('showall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { $this->index($request);
        //


        
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename="cover_Image" .'_'.time().'.'. $ext ;
            $file->move('adminimages', $filename);

        }
        admin::where('id',$id)->update([


            "admin_name"=>$request->user,
            "admin_phone"=>$request->phone,
            "admin_email"=>$request->email,
            "password"=> Hash::make($request->password),
            "admin_image"=>$filename
        ]);
        return  redirect('/admin')->with(['status' => ' Update successfully Admin.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $del=admin::where('id',$id)->delete();
        return redirect('admin')->with(['status' => ' Delete successfully Admin.']);
    }
}
