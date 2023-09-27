<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Student;
use Illuminate\Http\Request;
use Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->validate([
            "comment_body"=>'required',
                    
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
        
     {$this->index($request);
        // Comment::create([
        //     'comment'=>$request->body,
        //     'post_id'=>$id,
        //     'student_id'=>auth()->guard('student')->id(),
        // ]);

        // $input = $request->all();
        // $input['student_id'] = auth()->guard('student')->id();
    
        // Comment::create($input);
        // 'student_id'=>auth()->guard('student')->id(),

        $comment = new Comment;
        $comment->comment = $request->get('comment_body');
        $comment->student_id=auth()->guard('student')->id();
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($comment);

        return Back();
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $post=Post::all();
        $comment=Comment::paginate(9);
        //
        return view('Publicsite.Front-end.Comment',compact('post','comment'));
    }
// public function Showall($id){
//     $allcomment=Comment::where('post_id',$id)->get();
//     $comment = Comment::find($id);
//     $posts=Post::find( $comment);
 
  
 

   
   
//  return view('Publicsite.Front-end.singlepost',compact('posts','allcomment'));
// }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $showall=Comment::where('id',$id)->get()->first();
        return view('/Publicsite.Front-end.Editcomment',compact('showall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->index($request);


        Comment::where('id',$id)->update([


            'comment'=>request('comment_body'),
            // 'post_id'=>$post->id
        ]);
        return redirect('/chat');
    }


    
    public function Showall($id)
    { 
        // $trainer=Trainer::all();
        // $cousres=Course::find($id)->$id;
   

        $allcomments=Comment::where('post_id',$id)->get();
        $comment =Comment::find($id);
        $posts=Post::find( $comment);
     
      
     

       
       
     return view('Publicsite.Front-end.singlepost',compact('posts','allcomments'));
    }



    public function Showcomment()
    { 
        // $trainer=Trainer::all();
        // $cousres=Course::find($id)->$id;
   

        //
        $allcomments=Comment::paginate(5);
       $student=Student::paginate(5);
       
     
      
     

       
       
     return view('Dashboard.Backend.Comment',compact('student','allcomments'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $del=Comment::where('id',$id)->delete();
        return Back();
    }
}
