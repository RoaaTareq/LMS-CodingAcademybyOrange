<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Post;
use App\Student;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->validate([ 
            "post"=>'required',
           
         
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
    {
        
    // if($request->hasFile('image')){
    //     $file=$request->file('image');
    //     $ext=$file->getClientOriginalExtension();
    //     $filename="cover_Image" .'_'.time().'.'. $ext ;
    //     $file->move('PostImages', $filename);}
    
    $this->index($request);

    Post::create([
        'body'=>$request->post,
        'student_id'=>auth()->guard('student')->id(),
    ]);
    return redirect('/chat');
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)

    {
        $post=Post::paginate(5);
        

        return view('Publicsite.Front-end.Chat',compact('post'));
    }

    public function showall(Post $post)

    {
        $post=Post::paginate(5);
        

        return view('/Dashboard/Backend/Post',compact('post'));
    }


    public function singlepost($id){
       
    $posts = Post::find($id);

    


        return view('Publicsite/Front-end/singlepost',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show=Post::where('id',$id)->get()->first();
        return view ('Publicsite/Front-end/editpost',compact('show'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)


    {$this->index($request);
        Post::where('id',$id)->update([
            'body'=>$request->post,
          
        ]);
        return  redirect('/chat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete=Post::where('id',$id)->delete();
        return redirect('/chat');
    }
}
