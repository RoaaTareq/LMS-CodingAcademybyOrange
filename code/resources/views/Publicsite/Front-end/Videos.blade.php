@extends('Publicsite.Layout.public')
@section('title')
All Videos
@endsection
@section('link')
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin - health news</title>

    <link href="{{asset('assest/boosted-4.0.0-alpha.5-dist/css/orangeHelvetica.css')}}" rel="stylesheet">
    <link href="{{asset('assest/boosted-4.0.0-alpha.5-dist/css/orangeIcons.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assest/boosted-4.0.0-alpha.5-dist/css/boosted.min.css')}}" />
		<link href="{{asset('assest/boosted-4.0.0-alpha.5-dist/v4-alpha5/example.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('CSSFrontend\video.css')}}">
    <style>
       .pagination {
    display: inline-block;
    list-style: none;
    margin-left: 20px;
}

.searchbar ,.btnserch{
  position: relative;
  left: 30%;
  



}
.searchbar{
  padding:7px;
  width:35%
}

@media only screen and (max-width: 425px) {
  .searchbar,.btnserch{
  position: relative;
  left: 10%;
  



}
.searchbar{
  padding:7px;
  width:45%
}
  
}
      </style>

@endsection
  

@section('main')
<form  action="/searchvideo" class="form-inlines mt-2 mt-md-0" method="get">
	<div class="container">
			<input class="form-controls mr-sm-2 searchbar "   name="search" type="search" placeholder="Search" aria-label="Search">
			 <button class="btn btn-secondary btn-inverse my-2 my-sm-0 btnserch" type="submit" style="background:black;color:white">Search</button> 
  </div>
		  </form> 

<div class="row" style="margin:20px;">
  
   @foreach($allvideos as $video)

    <div class="col-sm-3">
    <div class="card">
     

      <video class="size" controls>
        <source src= '{{asset("Videoimages/$video->video")}}'  >
       
      </video>
      <div class="card-block">
        <h4 class="card-title">{{$video->Video_Name}}</h4>
        <p class="card-text">{{$video->Video_description}}</p>
              
      </div>
    </div>
    </div>

    

   

     @endforeach

        

   
    

   


    
  </div>
  {{$allvideos->links()}}
@endsection