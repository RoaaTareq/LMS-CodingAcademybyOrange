@extends('Dashboard.Layout.dashboardlayout')
@section('title')
Add Admin in dashboard
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
												<div class="row">                                @endif

			<form class="" method="post" action="/admin/create" enctype="multipart/form-data"
>@csrf

					<div class="row">
						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Name <span class="star">*</span></label>
								<input name="user" class="form-control" maxlength="255" type="text" value="{{old('user')}} ">
								@error("user")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>


						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Email<span class="star">*</span></label>
								<input name="email" class="form-control" maxlength="255" type="email" value="{{old('email')}}" >
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
								<input name="phone" class="form-control" maxlength="255" type="text"  value="{{old('phone')}}">
								@error("phone")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Picture<span class="star">*</span></label>
								<input name="image" class="form-control" maxlength="255" type="file" value="{{old('image')}}" >
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
								<input name="password" class="form-control" maxlength="255" type="password" value="{{old('password')}}" >
								@error("password")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">ConfiremPassword<span class="star">*</span></label>
								
								<input name="password_confirmation" class="form-control" maxlength="255" type="password" value="{{old('password_confirmation')}}" >
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
			<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   Show Admin Tabel
  </a>
  
</p>

  
<div class="row collapse" id="collapseExample"   >
				
				<table id="news-table" class="table"     >
					<thead>
						<tr>
							<th scope="col" class="header"><a href="#">ID<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Admin Name<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Email<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">mobile<span class="sr-only"> sortable</span></a></th>

							<th scope="col" class="header"><a href="#">picture<span class="sr-only"> sortable</span></a></th>

							<th scope="col" class="header"><a href="#">Edit<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Delete<span class="sr-only"> sortable</span></a></th>
							
						</tr>
					</thead>
					<tbody>
					@foreach ($show as $value)
						<tr>
						<th scope="row">{{$value->id}}</th>
        <td>{{$value->admin_name}}</td>
        <td>{{$value->admin_email}}</td>
        <td>{{$value->admin_phone}}</td>
        
       
        
        <td><img src= '{{asset("adminimages/$value->admin_image")}}' style="width:100px ;height:100px;"></td>
							<td><a href="edit/{{$value->id}}" class="btn btn-primary">Edit</a></td>
							<form action='delete/{{$value->id}}'method="post">
        
        @method('DELETE')
   @csrf
							<td><button type="submit"class="btn btn-danger" target="_self" data-toggle="modal" data-target="#confirm-dialog">Delete</button></td>
</form>

						
						</tr>
					@endforeach
					
					</tbody>
				</table>
				{{$show->links()}}
				<!-- Modal -->
				

		<hr>

		</main><!--/.container-->
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