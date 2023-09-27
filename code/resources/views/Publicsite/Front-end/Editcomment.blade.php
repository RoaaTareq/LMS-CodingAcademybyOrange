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
    


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    
 @endsection

 @section('main')

    
    <div class="panel">
        <div class="panel-body">
            <form method="post" action="/updatecomment/{{$showall->id}}"> 
                @csrf 
          <textarea
            class="form-control"
            rows="2"
            placeholder="What are you thinking?" name="comment_body"
          ></textarea>
          @error("comment_body")
          <p style="color:red;">{{$message}}</p>
          @enderror 
  
          <div class="mar-top clearfix">
            <button class="btn btn-sm btn-primary pull-right" type="submit">
              <i class="fa fa-pencil fa-fw"></i> Share
            </button>
           
          </div>
          </form>
        </div>
      </div>

@endsection