@extends('Dashboard.Layout.dashboardlayout')
@section('title')
Update Admin in dashboard
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
			<form class="" method="post" action="/update/{{$showall->id}}" enctype="multipart/form-data"
>@csrf

					<div class="row">
						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Name <span class="star">*</span></label>
								<input name="user" class="form-control" maxlength="255" type="text" value="{{$showall->admin_name}}" >
								@error("user")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>


						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Email<span class="star">*</span></label>
								<input name="email" class="form-control" maxlength="255" type="email" value="{{$showall->admin_email}}" >
								@error("email")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>
</div>

<div class="row">
						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">PhoneNumber<span class="star">*</span></label>
								<input name="phone" class="form-control" maxlength="255" type="text"  value="{{$showall->admin_phone}}">
								@error("phone")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>


						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Picture<span class="star">*</span></label>
								<input name="image" class="form-control" maxlength="255" type="file"value="{{$showall->admin_image}}" >
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
								<input name="password" class="form-control" maxlength="255" type="password" value="{{$showall->password}}" >
								@error("password")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">ConfiremPassword<span class="star">*</span></label>
								<input name="password_confirmation" class="form-control" maxlength="255" type="password" value="{{$showall->password}}" >
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

			<hr>
			@endsection