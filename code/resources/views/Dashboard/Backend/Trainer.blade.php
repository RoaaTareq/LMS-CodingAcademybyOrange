@extends('Dashboard.Layout.dashboardlayout')
@section('title')
Add Trainer in dashboard
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
			<form class="" method="post" action="/Trainer/create" enctype="multipart/form-data"
>@csrf

					<div class="row">
						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">FUllName <span class="star">*</span></label>
								<input name="NameTrainer" class="form-control" maxlength="255" type="text" value="{{old('NameTrainer')}}" >
								@error("NameTrainer")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>

						
						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Email<span class="star">*</span></label>
								<input name="EmailTranier" class="form-control" maxlength="255" type="email" value="{{old('EmailTranier')}}" >
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
								<input name="phoneTrainer" class="form-control" maxlength="255" type="text"  value="{{old('phoneTrainer')}}">
								@error("phoneTrainer")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>

                        
                        <div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Eduction<span class="star">*</span></label>
								<input name="EductionTrainer" class="form-control" maxlength="255" type="text" value="{{old('phoneTrainer')}}" >
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
								<input type="date" class="form-control"  id="inputEmail" name="Birthday" value="{{old('Birthday')}}">
              @error('Birthday')    
                       <p style="color:red">{{ $message }}</p>
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
								<input name="password_confirmation" class="form-control" maxlength="255" type="password"  value="{{old('password_confirmation')}}">
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
   Show Trainer Tabel
  </a>
  
</p>

  
<div class="row collapse" id="collapseExample"   >
				
				<table id="news-table" class="table"     >
					<thead>
						<tr>


							<th scope="col" class="header"><a href="#">ID<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Trainer Name<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Email<span class="sr-only"> sortable</span></a></th>
                            <th scope="col" class="header"><a href="#">Eduction<span class="sr-only"> sortable</span></a></th>
                            <th scope="col" class="header"><a href="#">DateBirthday<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">mobile<span class="sr-only"> sortable</span></a></th>

							<th scope="col" class="header"><a href="#">picture<span class="sr-only"> sortable</span></a></th>

							<th scope="col" class="header"><a href="#">Edit<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Delete<span class="sr-only"> sortable</span></a></th>
							
						</tr>
					</thead>
					<tbody>
                    @foreach($showall as $trainer)
						<tr>
						<th scope="row">{{$trainer->id}}</th>
						<td>{{$trainer->name_Trainer}}</td>
						<td>{{$trainer->email_Trainer}}</td>
						<td>{{$trainer->eduction_Trainer}}</td>
						<td>{{$trainer->Birthday_Trainer}}</td>
        
        <td>{{$trainer->phone_Trainer}}</td>
       
       
        
       
        
        <td><img src= '{{asset("Trainerimages/$trainer->image")}}' style="width:100px ;height:100px;"></td>
							<td><a href="traineredit/{{$trainer->id}}" class="btn btn-primary">Edit</a></td>
							<form action='Trainerdelete/{{$trainer->id}}'method="post">
        
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