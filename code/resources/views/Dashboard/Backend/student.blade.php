@extends('Dashboard.Layout.dashboardlayout')
@section('title')
Add Student in dashboard
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
			<form class="" method="post" action="/student/create" enctype="multipart/form-data"
>@csrf

					<div class="row">
						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">FullName<span class="star">*</span></label>
								<input name="studentname" class="form-control" maxlength="255" type="text"  value="{{old('studentname')}}">
								  
                                @error('studentname')
                                    <p style="color:red">{{ $message }}</p>
                                 @enderror
							</div>
						</div>


                        <div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Emaill<span class="star">*</span></label>
								<input name="studentemail" class="form-control" maxlength="255" type="email" value="{{old('studentemail')}}" >
								  
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
								<input name="studentphone" class="form-control" maxlength="255" type="text" value="{{old('studentphone')}}" >
								  
                                @error("studentphone")
                                    <p style="color:red">{{ $message }}</p>
                                 @enderror
							</div>
						</div>

                     
                        <div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Eduction<span class="star">*</span></label>
								<input name="studenteduction" class="form-control" maxlength="255" type="text" value="{{old('studenteduction')}} ">
								  
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
								<input type="date" class="form-control"  id="inputEmail" name="studentday" value="{{old('studentday')}}">
                                @error('studentday')
                                    <p style="color:red">{{ $message }}</p>
                                 @enderror
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Picture<span class="star">*</span></label>
								<input name="image" class="form-control" maxlength="255" type="file" value=" {{old('studentimages/image')}}" >
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
								<label for="PostName ">ConifremPassword<span class="star">*</span></label>
								<input name="password_confirmation" class="form-control" maxlength="255" type="password" value="{{old('password_confirmation')}}" >
								@error("password")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>
</div>


<!-- <div id="radio-action" class="form-inline">
<input type="radio" id="female" name="gender" value="female" @if(old('name', "female")) checked @endif>
						<label for="draft">female</label>
                        <input type="radio" id="male" name="gender" value="male "  @if(!old('name',"male")) checked @endif> 
						<label for="now">male</label>
                        @error('gender')
                                    <p style="color:red">{{ $message }}</p>
                                 @enderror
					</div> -->
					
					<div class="submit">
						<input class="btn btn-primary" type="submit" value="Submit">
					</div>
				</form>

			</div><!-- fin de la row globale-->
		</div>
			<hr>


			<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   Show Student Tabel
  </a>
  
</p>

  
<div class="row collapse" id="collapseExample"   >
				
				<table id="news-table" class="table"     >
					<thead>
						<tr>


							<th scope="col" class="header"><a href="#">ID<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Student Name<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Email<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">mobile<span class="sr-only"> sortable</span></a></th>
                            <th scope="col" class="header"><a href="#">Eduction<span class="sr-only"> sortable</span></a></th>
                         
							<th scope="col" class="header"><a href="#">Data Birthday<span class="sr-only"> sortable</span></a></th>
							

							<th scope="col" class="header"><a href="#">picture<span class="sr-only"> sortable</span></a></th>

							<th scope="col" class="header"><a href="#">Edit<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Delete<span class="sr-only"> sortable</span></a></th>
							
						</tr>
					</thead>
					<tbody>
					@foreach($showall as $student)
						<tr>
						<th scope="row">{{$student->id}}</th>
						<td>{{$student->student_name}}</td>
        <td>{{$student->student_email}}</td>
        <td>{{$student->phone_student}}</td>
        <td>{{$student->eduction_student}}</td>

        <td>{{$student->Birthday}}</td>
    
		<td><img src= '{{asset("studentimages/$student->student_image")}}' style="width:100px ;height:100px;"></td>
							<td><a href="studentedit/{{$student->id}}" class="btn btn-primary">Edit</a></td>
							<form action='studentsdelete/{{$student->id}}'method="post">
        
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