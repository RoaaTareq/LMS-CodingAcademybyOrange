@extends('Dashboard.Layout.dashboardlayout')
@section('title')
Update Video in dashboard
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

			<div class="row ">
			<form class="" method="post" action="/updatevedio/{{$show->id}}" enctype="multipart/form-data"
>@csrf
					<div class="row">
						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Video Name <span class="star">*</span></label>
								<input name="videotitle" class="form-control" maxlength="255" type="text" value="{{$show->Video_Name}}" >
                              
              @error('videotitle')
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>


						
                        <div class="col-md-6">
							<div class="form-group">
								<label for="PostCategoryId">CourseName:</label>
								<select  name="Coursename" class="form-control" id="PostCategoryId">
									<option value="">Select  CourseName</option>
								 @foreach($cousres as  $librar)
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
								<select  name="Trainername" class="form-control" id="PostCategoryId">
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
								<input name="Video" class="form-control" maxlength="255" type="file"  value="{{$show->video}}">
								@error("Video")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>
						</div>
                        
				
                   
					<div class="form-group required">
						<label for="PostContent">description:</label>
						
                        <textarea name="desc"class="form-control" cols="30" rows="6" id="PostContent">{{$show->Video_description}}</textarea>
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
            @endsection