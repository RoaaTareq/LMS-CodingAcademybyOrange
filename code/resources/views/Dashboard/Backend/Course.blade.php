@extends('Dashboard.Layout.dashboardlayout')
@section('title')
Add Course in dashboard
@endsection
@section('Link')


<style>
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1.25rem;
}
table {
    border-collapse: collapse;
    background-color: #fff;
}

.row {
    margin-right: -5px;
    margin-left: -5px;
}
.read-more
{

 text-decoration: none;

 color: #000000;

 font-weight: bold;

  }
  .show-read-more .more-text{
        display: none;
    }
/*serach bar*/
/* .mt-2 {
    margin-top: 1.25rem!important;
   margin-left:30%;
   margin-right: 30%;
	
}
@media (min-width: 480px){
.form-inlines .form-controls {
    display: inline-block;
    width: 60%;
    vertical-align: middle;
	padding:8px;
}} */
</style>
@endsection
@section('main')
{{-- <form  action="/search"class="form-inlines mt-2 mt-md-0" method="get">
	
	<input class="form-controls mr-sm-2 "  name="search"type="search" placeholder="Search" aria-label="Search">
	<button class="btn btn-secondary btn-inverse my-2 my-sm-0" type="submit" style="background:black;color:white">Search</button>
  </form> --}}
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

			
			<form class="" method="post" action="/Course" enctype="multipart/form-data"
>@csrf

					<div class="row">
						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Course Name <span class="star">*</span></label>
								<input name="course" class="form-control" maxlength="255" type="text"value="{{old('course')}}" >
								  
                                @error("course")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>

</div>



						
						<div class="col-md-6">
							<div class="form-group">
								<label for="PostCategoryId">TrainerName:</label>
								<select  name="Trainer_Name" class="form-control" id="PostCategoryId">
								<option value="">Select  TrainerName</option>
                                @foreach($trainer as $course)
                                <option value="{{$course->id}}" >{{$course->name_Trainer}}</option>
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
								<input name="image" class="form-control" maxlength="255" type="file" value="{{old('image')}}" >
								@error("image")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="PostCategoryId">TrainerEmail:</label>
								<select  name="Traineremail" class="form-control" id="PostCategoryId">
								<option value="">Select Email Trainer</option>
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
						
                        <textarea name="Coursedeatials"class="form-control" cols="30" rows="6" id="PostContent">{{old('Coursedeatials')}}</textarea>
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

			 <p>
   <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   Show Course Tabel
  </a> 
  
</p>

  
 <div class="row collapse" id="collapseExample"   > 
				
				<table id="news-table" class="table"     >
					<thead>
						<tr id="news-table" >


							<th scope="col" class="header"><a href="#">ID<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">CourseName<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Trainer Name<span class="sr-only"> sortable</span></a></th>

							<th scope="col" class="header"><a href="#">Trainer Email<span class="sr-only"> sortable</span></a></th>
                            <th scope="col" class="header"><a href="#">Course deatials<span class="sr-only"> sortable</span></a></th>
                            <th scope="col" class="header"><a href="#">picture<span class="sr-only"> sortable</span></a></th>
							
							<th scope="col" class="header"><a href="#">Edit<span class="sr-only"> sortable</span></a></th>
							<th scope="col" class="header"><a href="#">Delete<span class="sr-only"> sortable</span></a></th>
							
						</tr>
					</thead>
					<tbody>
					@foreach($courses as $course)
						<tr>
						<th scope="row">{{$course->id}}</th>
        <td>{{$course->course_Name}}</td>
        <td>{{$course->Trainer->name_Trainer}}</td>
		<td>{{$course->Trainer->email_Trainer}}</td>
       
        <td ><p class="show-read-more">{{$course->Course_deatials}}</p></td>
	
		<td><img src= '{{asset("Courseimages/$course->Course_Image")}}' style="width:100px ;height:100px;"></td>		<td> <a href="courseedit/{{$course->id}}" class="btn btn-primary"> Edit</a></td>			
        <form action='deletecourse/{{$course->id}}'method="post">
        
        @method('DELETE')
   @csrf
   
   <td><button  type="submit"class="btn btn-danger" target="_self" data-toggle="modal" data-target="#confirm-dialog">Delete</button></td>
       
       
        
       
        
        
						</tr>
					@endforeach
					 
					</tbody>
				</table>
				{{$courses->links()}}
</div>
			<!-- <button  class="btn btn-primary" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Show Courses</button> -->
			
			

				<!-- Modal -->
				

		<hr>

		</main>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
// function myFunction() {
//    var element = document.getElementById("news-table");
//    element.classList.toggle("table");
// }

$(document).ready(function(){
	var maxLength = 100;
	$(".show-read-more").each(function(){
		var myStr = $(this).text();
		if($.trim(myStr).length > maxLength){
			var newStr = myStr.substring(0, maxLength);
			var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
			$(this).empty().html(newStr);
			$(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
			$(this).append('<span class="more-text">' + removedStr + '</span>');
		}
	});
	$(".read-more").click(function(){
		$(this).siblings(".more-text").contents().unwrap();
		$(this).remove();
	});
});
</script>
	
            @endsection