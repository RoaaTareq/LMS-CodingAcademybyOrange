@extends('Dashboard.Layout.dashboardlayout')
@section('title')
 Update Trainerin dashboard
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
<form class="" method="post" action="/updateTrainer/{{$show->id}}" enctype="multipart/form-data"
>
@csrf

					<div class="row">
						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">FUllName <span class="star">*</span></label>
								<input name="NameTrainer" class="form-control" maxlength="255" type="text" value="{{$show->name_Trainer}}" >
								@error("NameTrainer")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>


						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Email<span class="star">*</span></label>
								<input name="EmailTranier" class="form-control" maxlength="255" type="email" value="{{$show->email_Trainer}}" >
								@error("EmailTranier")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>

</div>
<div class="row">
						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">PhoneNumber<span class="star">*</span></label>
								<input name="phoneTrainer" class="form-control" maxlength="255" type="text" value="{{$show->phone_Trainer}}" >
								@error("phoneTrainer")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>

                        
                        <div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Eduction<span class="star">*</span></label>
								<input name="EductionTrainer" class="form-control" maxlength="255" type="text" value="{{$show->eduction_Trainer}}" >
								@error("EductionTrainer")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>
</div>

<div class="row">
                        <div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">DateBirthday<span class="star">*</span></label>
								<input type="date" class="form-control"  id="inputEmail" name="Birthday" value="{{$show->Birthday_Trainer}}">
              @error('Birthday')    
                       <p style="color:red">{{ $message }}</p>
                                 @enderror
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Picture<span class="star">*</span></label>
								<input name="image" class="form-control" maxlength="255" type="file" value="{{$show->image}}" >
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
								<input name="password" class="form-control" maxlength="255" type="password" value="{{$show->password}}" >
								@error("password")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group required ">
							
								<label for="PostName ">ConfiremPassword<span class="star">*</span></label>
								<input name="password_confirmation" class="form-control" maxlength="255" type="password"  value="{{$show->password}}">
								@error("password")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>



                       </div>
					
					<div class="submit">
						<input class="btn btn-primary" type="submit" value="Submit">
					</div>
				</form>

			</div><!-- fin de la row globale-->
		</div>

			<hr>


            @endsection