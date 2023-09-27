
 @extends('Publicsite.Layout.public')
@section('title')
Chat Area
@endsection

 @section('link')
 <script src="https://kit.fontawesome.com/7ae71a9832.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="{{asset('CSSFrontend\chat.css')}}">
 
@endsection

@section('main')
<div class="container bootdey">
  <div class="col-md-12 bootstrap snippets">
    <form action ="/post"  method="post">
      @csrf
  <div class="panel">
    <div class="panel-body">
      <textarea class="form-control" rows="2" name="post" placeholder="What are you thinking?"></textarea>
      @error("post")
<p style="color:red;">{{$message}}</p>
@enderror 
      <div class="mar-top clearfix">
        <button class="btn btn-sm btn-primary pull-right" type="submit"  style="background-color: rgb(255,108,1); border-color: rgb(255,108,1)"> Share</button>
      
      </div>
    </div>
  </div>
</form>

</div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<div class="container">
<div class="row">
    <div class="col-12">
        <div class="card">
          @foreach($post as $posts)
            <div class="card-body">
                <ul class="timeline timeline-left">
                    <li class="timeline-inverted timeline-item">
                        <div class="timeline-badge success"><img src='studentimages/{{$posts->Student->student_image}}'alt="img"  style="height:58px"class="img-fluid" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">{{$posts->Student->student_name}}</h4>
                             

<p><a  href="/post/show/{{$posts->id}}"  class="write"href="comments"><i class="fas fa-pen"></i>write comment</a></p>
                                  <p>  <small class="text-muted"><i class="fa fa-clock-o"></i> {{$posts->created_at->toDayDateTimeString()}}</small>
                                    <div class="containerbtn">          
										@if (Auth::id() === $posts->Student->id)
                  
                                  <a href="editpost/{{$posts->id}}">  <i class="fas fa-edit sizebtn"></i></a>
                            <form method="post" action="/deletepost/{{$posts->id}}" class="press">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btns"><i class="fas fa-trash-alt"></i></button>
                                  </form>
                                  @endif
                    
                  </p>
                               
                          
                            <div class="timeline-body">
                                <p>
                                   {{$posts->body}}
                                </p>
                               

                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                    </li>
                   
                  
                   
                    
                </ul>
            </div>
            @endforeach
        </div>
        
    </div>
</div>
{{$post->links()}}
</div>


@endsection