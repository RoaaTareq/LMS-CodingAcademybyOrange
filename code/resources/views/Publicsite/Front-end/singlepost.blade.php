@extends('Publicsite.Layout.public')
@section('title')
Comment Area
@endsection
@section('link')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   
    <link rel="stylesheet" href="{{asset('CSSFrontend\singlepost.css')}}">
    @endsection


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    @section('main')

            
  
      
     <div class="container bootdey">
          <div class="col-md-12 bootstrap snippets">
            <div class="panel">
              <div class="panel-body">
              
           
                <div class="media-block">
                  <a class="media-left" href="#"
                    ><img
                      class="img-circle img-sm"
                      alt="Profile Picture" src="/studentimages/{{$posts->Student->student_image}}"
                  /></a>
                  <div class="media-body">
                    <div class="mar-btm">
                      <a
                        href="#"
                        class="btn-link text-semibold media-heading box-inline"
                        ><i class="fas fa-pen"></i>{{$posts->Student->student_name}} .</a
                      >
                      <p class="text-muted text-sm">
                        <i class="fa fa-clock-o"></i> {{$posts->created_at->toDayDateTimeString()}}
                      </p>
                    </div>
                    <p class="post-size">
                      {{$posts->body}}
                    </p>
                    
    
                   
                  </div>
                </div>
    
               
              </div>
            </div>
            <div class="panel">
              <div class="panel-body">
                <form method="post" action="{{ route('comments.store' ) }}"> 
                  @csrf
                <textarea
                  class="form-control"
                  rows="2"
                  placeholder="What are you thinking?" name="comment_body"
                ></textarea>
                @error("comment_body")
                <p style="color:red;">{{$message}}</p>
                @enderror 
                <input type="hidden" name="post_id" value="{{ $posts->id }}" />
                <div class="mar-top clearfix">
                  <button class="btn btn-sm btn-primary pull-right" type="submit">
                    <i class="fa fa-pencil fa-fw"></i> Share
                  </button>
                 
                </div>
                </form>
              </div>
            </div>
    
            <div class="panel">
              <div class="panel-body">
            
               
               
            @foreach($posts->comments as $comment)
                <div class="media-block">
                  <a class="media-left" href="#"
                    ><img
                      class="img-circle img-sm"
                      lt="Profile Picture" src="/studentimages/{{$comment->Student->student_image}}"
                  /></a>
                  <div class="media-body">
                    <div class="mar-btm">
                      <a
                        href="#"
                        class="btn-link text-semibold media-heading box-inline"
                        ><i class="fas fa-pen"></i>{{$comment ->student->student_name}}</a
                      >
                      <p class="text-muted text-sm ">
                       <i class="fa fa-clock-o time"></i>  {{$comment->created_at->toDayDateTimeString()  }}
                      </p>
                    </div>
                    <div class="pad-ver">
                      <div class="btn-group">
                       
                      @if (Auth::id() === $comment->student_id) 
                      <a href="/editcomment/{{$comment->id}}" class="size"> 
                        <i class="fas fa-edit"></i></a>
                        <form method="post" action="/deletecomment/{{$comment->id}}">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btns"><i class="fas fa-trash-alt" style=" color:red"></i></button>
                      </form>
                      @endif
                    </div>
                    </div>
 
                    <p class="font-comment">
                      {{$comment->comment}}
                    </p>
                    
                
                  </div>
                </div>
                <hr>
                @endforeach
               
              </div>
            </div>
           
          </div>
        </div>
     
    

@endsection