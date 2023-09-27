@extends('Dashboard.Layout.dashboardlayout')
@section('title')
Add Book in dashboard
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
			<form class="" method="post" action="/library" enctype="multipart/form-data"
>@csrf
					<div class="row">
						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">book Name <span class="star">*</span></label>
								<input name="bookname" class="form-control" maxlength="255" type="text"value="{{old('bookname')}}" >
                              
              @error("bookname")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="PostCategoryId">TrainerName:</label>
								<select  name="Trainername" class="form-control" id="PostCategoryId" >
									<option value="">Select  TrainerName</option>
								
								@foreach($trainer as  $librar)
                                <option value="{{ $librar->id   }} ">{{ $librar->name_Trainer}}</option>
                                @endforeach
								</select>
                                @error("Trainername")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
                            
						</div>
						


						</div>
                        <div class="row">
						
                  
                        <div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Picture<span class="star">*</span></label>
								<input name="image" class="form-control" maxlength="255" type="file" >
								@error("image")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>


						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Book<span class="star">*</span></label>
								<input name="file" class="form-control" maxlength="255" type="file"  value="{{old('file')}}">
								@error("file")
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
   Show Library Tabel
  </a>
  
</p>

  
<div class="row collapse" id="collapseExample"   >
				
				<table id="news-table" class="table"     >
					<thead>
						<tr>
							<th scope="col" class="header"><a href="#">ID<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">book Name<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Subject<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Trainer Name<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="heer"><a href="#">description<span class="sr-only"> sortable</span></a></th>

							<th scope="col" class="header"><a href="#">picture<span class="sr-only"> sortable</span></a></th>

							<th scope="col" class="header"><a href="#">Edit<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Delete<span class="sr-only"> sortable</span></a></th>
							
						</tr>
					</thead>
					<tbody>
					@foreach($showall as $librar)
						<tr>
						<th scope="row">{{$librar ->id}}</th>
        <td>{{$librar->bookName}}</td>
        <td>{{$librar->filebook}}</td>
		<td>{{$librar->Tutor->name_Trainer}}</td>
        <td>{{$librar->description}}</td>
       
		<td><img src='{{asset("libraryimages/$librar->image")}}' style="width:100px ;height:100px;"></td>
		<td><a href="librayedit/{{$librar->id}}" class="btn btn-primary">Edit</a></td>
		<form action='librarydelete/{{$librar->id}}'method="post">
        
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


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

var t =document.getElementById('news-table').style.dispaly = "none";

// $('button').click(function(){
//   if ($('table').is(':display :none')) {
//     $('table').show()
//   } else {
// 	$('table').hide() 
//   }
// })

// $('table').style.display = "none";
$('button').click(function(){
	
  if ($('table').style.display == "block") {
    $('table').style.display == "none"
  } else {
	$('table').style.display == " block" 
  }
})</script>
		</main>
@endsection