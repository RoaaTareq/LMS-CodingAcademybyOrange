@extends('Publicsite.Layout.public')

@section('link')
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> All Resourse</title>

    <link href="{{asset('assest/boosted-4.0.0-alpha.5-dist/css/orangeHelvetica.css')}}" rel="stylesheet">
    <link href="{{asset('assest/boosted-4.0.0-alpha.5-dist/css/orangeIcons.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assest/boosted-4.0.0-alpha.5-dist/css/boosted.min.css')}}" />
		<link href="{{asset('assest/boosted-4.0.0-alpha.5-dist/v4-alpha5/example.css')}}" rel="stylesheet">
  
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
}}
      </style>

@endsection
  

@section('main')
<form  action="/searchbook" class="form-inlines mt-2 mt-md-0" method="get">
	<div class="container">
			<input class="form-controls mr-sm-2 searchbar "   name="search" type="search" placeholder="Search" aria-label="Search">
			 <button class="btn btn-secondary btn-inverse my-2 my-sm-0 btnserch" type="submit" style="background:black;color:white">Search</button> 
  </div>
		  </form> 



    <div class="row" style="margin:20px;">
      @foreach($download as $books)
      <div class="col-sm-4">
        <div class="card">
          <div class="card-block">
          <h3 class="card-title">{{$books->bookName}}</h3>
          <p class="card-text">{{$books->description}}
          
          
          </p>
          
          <a href="libraryfilles/{{$books->filebook}}" libraryfilles="{{$books->filebook}}"
            target="_blank" class="portal_btn" style="display:inline-block;padding:7px 15px;font-family:'Roboto-Regular';color:#fff;letter-spacing: initial; border:none;background-color:rgb(255,108,1)">Download</a>
        </div>
      </div>
      </div>

   

   

     @endforeach

        

   
    

   


    
  </div>

  {{$download->links()}}
@endsection