@extends('Dashboard.Layout.dashboardlayout')
@section('title')
Update Course in dashboard
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
<form class="" method="post" action="/updatecourse/{{$show->id}}" enctype="multipart/form-data"
>@csrf


<div class="row">
						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Course Name <span class="star">*</span></label>
								<input name="course" class="form-control" maxlength="255" type="text"  value="{{$show->course_Name}}">
								  
                                @error("course")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>

						
						<div class="col-md-6">
							<div class="form-group">
								<label for="PostCategoryId">TrainerName:</label>
								<select  name="Trainer_Name" class="form-control" id="PostCategoryId">
                                @foreach($trainer as $course)
                                <option value="{{$course->id}}">{{$course->name_Trainer}}</option>
                                @endforeach
								</select>
                                @error("Trainer_Name")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
                            
						</div>
</div>

<div class="row">





						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Picture<span class="star">*</span></label>
								<input name="image" class="form-control" maxlength="255" type="file" value="{{$show->Course_Image}}">
								@error("image")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>




						<div class="col-md-6">
							<div class="form-group">
								<label for="PostCategoryId">TrainerEmail:</label>
								<select  name="Traineremail" class="form-control" id="PostCategoryId">
                                @foreach($trainer as $course)
                                <option value="{{$course->id}}">{{$course->email_Trainer}}</option>
                                @endforeach
								</select>
                                @error("Traineremail")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
                            
						</div>

</div>


<div class="form-group required">
						<label for="PostContent">Course deatials:</label>
						
                        <textarea name="Coursedeatials"class="form-control" cols="30" rows="6" id="PostContent">{{$show->Course_deatials}}</textarea>
                        @error("Coursedeatials")
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




			
				



	
            @endsection