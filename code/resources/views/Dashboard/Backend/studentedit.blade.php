@extends('Dashboard.Layout.dashboardlayout')
@section('title')
Update student in dashboard
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

<form class="" method="post" action="/updatestudent/{{$showall->id}}" enctype="multipart/form-data"
>@csrf


					<div class="row">
						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">FullName<span class="star">*</span></label>
								<input name="studentname" class="form-control" maxlength="255" type="text" value="{{$showall->student_name}}" >
								  
                                @error('studentname')
                                    <p style="color:red">{{ $message }}</p>
                                 @enderror
							</div>
						</div>


                        <div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Emaill<span class="star">*</span></label>
								<input name="studentemail" class="form-control" maxlength="255" type="email" value="{{($showall->student_email)}}" >
								  
                                @error('studentemail')
                                    <p style="color:red">{{ $message }}</p>
                                 @enderror
							</div>
						</div>
</div>
					

<div class="row">

<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Phone<span class="star">*</span></label>
								<input name="studentphone" class="form-control" maxlength="255" type="text" value="{{($showall->phone_student)}}" >
								  
                                @error("studentphone")
                                    <p style="color:red">{{ $message }}</p>
                                 @enderror
							</div>
						</div>

                     
                        <div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Eduction<span class="star">*</span></label>
								<input name="studenteduction" class="form-control" maxlength="255" type="text"value="{{($showall->eduction_student)}}" >
								  
                                @error('studenteduction')
                                    <p style="color:red">{{ $message }}</p>
                                 @enderror
							</div>
						</div>
                            
						</div>



                        <div class="row">
                        <div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">DateBirthday<span class="star">*</span></label>
								<input type="date" class="form-control"  id="inputEmail" name="studentday" value="{{($showall->Birthday)}}">
                                @error('studentday')
                                    <p style="color:red">{{ $message }}</p>
                                 @enderror
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Picture<span class="star">*</span></label>
								<input name="image" class="form-control" maxlength="255" type="file"value="{{($showall->student_image)}}" >
								@error("image")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>
</div>


<div class="row">
<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Password<span class="star">*</span></label>
								<input name="password" class="form-control" maxlength="255" type="password" value="{{($showall->password)}}" >
								@error("password")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>




                        <div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Confirmation Password<span class="star">*</span></label>
								<input name="password_confirmation" class="form-control" maxlength="255" type="password"value="{{($showall->password)}}" >
								@error("password")
<p style="color:red;">{{$message}}</p>
@enderror 

							</div>
						</div>
</div>


<!-- <div id="radio-action" class="form-inline">
<input type="radio" id="female" name="gender" value="female">
						<label for="draft">Male</label>
                        <input type="radio" id="male" name="gender" value="male">
						<label for="now">female</label>
                        @error('gender')
                                    <p style="color:red">{{ $message }}</p>
                                 @enderror
					</div> -->
					
					<div class="submit">
						<input class="btn btn-primary" type="submit" value="Submit">
					</div>
				</form>

			</div><!-- fin de la row globale-->
		
			<hr>
@endsection