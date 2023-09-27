@extends('Dashboard.Layout.dashboardlayout')
@section('title')
Add Video in dashboard
@endsection
@section('main')

<main id="content" class="container ">


		    <div id="header" class="container">
			<div class="row">
				<div class="col-sm-6" style="margin-top:60px;" >
					<!-- <a href="#">
						<img src="images/logo-orange.png" alt="Back to homepage">
					</a>
					<h1>edit a news</h1>   -->
				</div>
			</div>
		</div>
		@if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                                </div>
												                               @endif
			<div class="row ">
			<form class="" method="post" action="/videos" enctype="multipart/form-data"
>@csrf
					<div class="row">
						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Video Name <span class="star">*</span></label>
								<input name="videotitle" class="form-control" maxlength="255" type="text" value="{{old('videotitle')}}" >
                              
              @error('videotitle')
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>


						
                        <div class="col-md-6">
							<div class="form-group">
								<label for="PostCategoryId">CourseName:</label>
								<select  name="Coursename" class="form-control" id="PostCategoryId" >
									<option value="">Select  CourseName</option>
								 @foreach($cousres as $librar)
                                <option value="{{ $librar->id}}">{{ $librar->course_Name}}</option>
								@endforeach
								</select>
							
								
                                @error("Coursename")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
                            
						</div>


						</div>
                        <div class="row">
						
                        <div class="col-md-6">
							<div class="form-group">
								<label for="PostCategoryId">TrainerName:</label>
								<select  name="Trainername" class="form-control" id="PostCategoryId" visability>
									<option value="">Select  TrainerName</option>
								@foreach($trainer as  $librar)
                                <option value="{{ $librar->id}}">{{ $librar->name_Trainer}}</option>
                                @endforeach
								</select>
                                @error("Trainername")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
                            
						</div>
                        <div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Video<span class="star">*</span></label>
								<input name="Video" class="form-control" maxlength="255" type="file" value="{{old('Video')}}" >
								@error("Video")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>
						</div>
                        
				
                   
					<div class="form-group required">
						<label for="PostContent">description:</label>
						
                        <textarea name="desc"class="form-control" cols="30" rows="6" id="PostContent">{{old('desc')}}</textarea>
						@error("desc")
<p style="color:red;">{{$message}}</p>
@enderror 
					</div>
					<div class="submit">
						<input class="btn btn-primary" type="submit" value="Submit">
					</div>
				</form>

			</div><!-- fin de la row globale-->
			</div>
<hr>
			
<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   Show Video Tabel
  </a>
  
</p>

  
<div class="row collapse" id="collapseExample"   >
				
				<table id="news-table" class="table"     >
					<thead>
						<tr>


							<th scope="col" class="header"><a href="#">ID<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Video Name<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">CourseName<span class="sr-only"> sortable</span></a></th>
                            <th scope="col" class="header"><a href="#">TrainerName<span class="sr-only"> sortable</span></a></th>
                            <th scope="col" class="header"><a href="#">Video_description
							
							<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Video<span class="sr-only"> sortable</span></a></th>
							

							<th scope="col" class="header"><a href="#">Edit<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Delete<span class="sr-only"> sortable</span></a></th>
							
						</tr>
					</thead>
					<tbody>
                    @foreach($showall as $librar)
						<tr>
						<th scope="row">{{$librar->id}}</th>
						<td>{{$librar->Video_Name}}</td>
						<td>{{$librar->Course->course_Name}}</td>
						<td>{{$librar->Coach->name_Trainer}}</td>
						<td>{{$librar->Video_description}}</td>
					
						<td>{{$librar->video}}</td>
       
		
        
       
       
        
       
        
       
							<td><a href="videoedit/{{$librar->id}}" class="btn btn-primary">Edit</a></td>
							<form action='/deletevedio/{{$librar->id}}'method="post">
        
        @method('DELETE')
   @csrf
							<td><button type="submit"class="btn btn-danger" target="_self" data-toggle="modal" data-target="#confirm-dialog">Delete</button></td>
</form>

						
						</tr>
					@endforeach
						
					</tbody>
				</table>
				{{$showall->links()}}
				
				<!-- Modal -->
				

		<hr>

		</main>

			<hr>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>


$('button').click(function(){
  if ($('table').is(':visible')) {
    $('table').hide()
  } else {
    $('table').show()
  }
})</script>

			
            @endsection