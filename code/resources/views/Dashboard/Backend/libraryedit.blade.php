@extends('Dashboard.Layout.dashboardlayout')
@section('title')
Update Book in dashboard
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

<form class="" method="post" action="/updatelibray/{{$show->id}}" enctype="multipart/form-data"
>@csrf
<div class="row">
						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">book Name <span class="star">*</span></label>
								<input name="bookname" class="form-control" maxlength="255" type="text" value="{{$show->bookName}}" >
                              
              @error("bookname")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>


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


						</div>
                        <div class="row">
						
                       
                        <div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Picture<span class="star">*</span></label>
								<input name="image" class="form-control" maxlength="255" type="file"value="{{$show->image}}" >
								@error("image")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>



						<div class="col-md-6">
							<div class="form-group required ">
								<label for="PostName ">Book<span class="star">*</span></label>
								<input name="file" class="form-control" maxlength="255" type="file" value="{{$show->filebook}}" >
								@error("file")
<p style="color:red;">{{$message}}</p>
@enderror 
							</div>
						</div>
						</div>
                        
				
                   
					<div class="form-group required">
						<label for="PostContent">description:</label>
						
                        <textarea name="desc"class="form-control" cols="30" rows="6" id="PostContent">{{$show->description}}</textarea>
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


            @endsection