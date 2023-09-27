
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		@yield('Link')
    <link href="{{asset('assest/boosted-4.0.0-alpha.5-dist/css/orangeHelvetica.css')}}" rel="stylesheet">
    <link href="{{asset('assest/boosted-4.0.0-alpha.5-dist/css/orangeIcons.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assest/boosted-4.0.0-alpha.5-dist/css/boosted.min.css')}}" />
		<link href="{{asset('assest/boosted-4.0.0-alpha.5-dist/v4-alpha5/example.css')}}" rel="stylesheet">
		<script src="https://kit.fontawesome.com/7ae71a9832.js" crossorigin="anonymous"></script>
		<style>
	
@media (min-width: 480px){
.form-inlines .form-controls {
    display: inline-block;
    width: 40%; 
    vertical-align: middle;
	padding:8px;
}}

@media (min-width:425px){
	.form-inlines .form-controls {
    display: inline-flex;
    /* width: 60%; */
    vertical-align: middle;
	padding:8px;
}


.mt-2 {
    margin-top: 1.25rem!important;
   margin-left:60%!important;
   margin-right: 60% !important;
	

	}		/*serach bar*/


}
@media (min-width:425px){
	.mt-2 {
	margin-right: 6%!important;
	margin-left:6%!important;

  
   /* margin-left:60%;
   margin-right: 3%; */
	
}
}

@media (min-width:367px){
	.mt-2 {
	margin-right: 6%!important;
	margin-left:6%!important;

  
   /* margin-left:60%;
   margin-right: 3%; */
	
}
}
@media (max-width:320px){
	.mt-2 {
  
   margin-left:6%!important;
   margin-right: 6%!important;
	
}
}






			</style>
	</head>
	<body>
   
		<header role="banner">
			@if(Auth::guard('admin')->check())
      <nav id="mainNav" class="navbar navbar-dark">
        <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
          <button type="button" class="navbar-toggler hidden-sm-up" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
  				<!-- Collect the nav links, forms, and other content for toggling -->
  				<div class="collapse navbar-toggleable-xs" id="bs-example-navbar-collapse-1 " >
                      <a class="navbar-brand" href="#">
  						<img id="orange_logo" src="{{asset('assest/boosted-4.0.0-alpha.5-dist/img/ORANGE_LOGO_rgb.jpg')}}" alt="Homepage"/>
  						<span id="app_name"></span>
						 
  					</a>
  					<ul class="nav navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage Dashboard</a>
							<div class="dropdown-menu" aria-labelledby="dropdown01">
							  <a class=" dropdown-item" href="/admin" title="open the news menu">ManageAdmin</a>
							  <a class=" dropdown-item" href="/Trainer" title="open the news menu">ManageTrainer</a>
							  <a class=" dropdown-item" href="/student" title="open the news menu">ManageStudent</a>
							  <a class=" dropdown-item" href="/library" title="open the news menu">Manageresourse</a>
							  <a class=" dropdown-item" href="/Course" title="open the news menu">ManageCourse</a>
							  <a class=" dropdown-item" href="/videos" title="open the news menu">ManageVideo</a>
							  
							</div>
						  </li>
  						{{-- <li class="nav-item"><a class="nav-link dropdown-item" href="/admin" title="open the news menu">ManageAdmin</a></li>
  						<li class="nav-item"><a class="nav-link dropdown-item" href="/Trainer" title="open the news menu">ManageTrainer</a></li>
  						<li class="nav-item"><a class="nav-link dropdown-item" href="/student" title="open the news menu">ManageStudent</a></li>
						  <li class="nav-item"><a class="nav-link dropdown-item" href="/library" title="open the news menu">Manageresourse</a></li>
						  <li class="nav-item"><a class="nav-link dropdown-item" href="/Course" title="open the news menu">ManageCourse</a></li>
						  <li class="nav-item"><a class="nav-link dropdown-item" href="/videos" title="open the news menu">ManageVideo</a></li>
						   --}}
						   <li class="nav-item"><a class="nav-link dropdown-item" href="/Showcomment" title="open the news menu">comment</a></li>
						   <li class="nav-item"><a class="nav-link dropdown-item" href="/posts" title="open the news menu">Post</a></li>
						   <li class="nav-item"><a class="nav-link dropdown-item" href="/tasks" title="open the news menu">task</a></li>
  						{{-- <li class="nav-item" id="id_for_cdu_link"> task</li>
						  <li class="nav-item" id="id_for_cdu_link"> Post</li>
						  <li class="nav-item" id="id_for_cdu_link"> Comment</li> --}}
  					</ul>
  					<ul class="nav navbar-nav float-md-right">
  					
  							
  							
  							
  							<ul class="nav navbar-nav float-md-right hidden-xs" role="tablist">
                    {{-- <li class="nav-item" role="presentation">
                        <a href="#" title="Search into the website" class="icon-search nav-link"><span class="sr-only">Search into the website</span></a>
                    </li> --}}
					</ul>
  						</li>
  						<li role="presentation" class="nav-item dropdown">
  							<a href="#" class="dropdown-toggle active" data-toggle="dropdown">
								<i class="fas fa-sign-out-alt"></i>Exit
  								<span class="hidden-xs hidden-sm">
									
								
  									<span class="orange">  </span>&nbsp;
  								</span><b class="caret" aria-hidden="true"></b>


  							</a>
  							<ul class="dropdown-menu">
  								<li><a class="dropdown-item" href="/admin/logout">Adminlogout</a></li>
								  {{-- <li><a class="dropdown-item" href="/trainer/logout">Trainerlogout</a></li> --}}
  								{{-- <li><a class="dropdown-item" href=""> </a></li> --}}
  							</ul>
  						</li>
  					</ul>
  			</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
@else
		<nav id="mainNav" class="navbar navbar-dark">
			<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
			  <button type="button" class="navbar-toggler hidden-sm-up" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
			  </button>
					  <!-- Collect the nav links, forms, and other content for toggling -->
					  <div class="collapse navbar-toggleable-xs" id="bs-example-navbar-collapse-1 " >
						  <a class="navbar-brand" href="#">
							  <img id="orange_logo" src="{{asset('assest/boosted-4.0.0-alpha.5-dist/img/ORANGE_LOGO_rgb.jpg')}}" alt="Homepage"/>
							  <span id="app_name"></span>
							 
						  </a>
						  <ul class="nav navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage Dashboard</a>
								<div class="dropdown-menu" aria-labelledby="dropdown01">
								  
								  <a class=" dropdown-item" href="/library" title="open the news menu">Manageresourse</a>
								  <a class=" dropdown-item" href="/Course" title="open the news menu">ManageCourse</a>
								  <a class=" dropdown-item" href="/videos" title="open the news menu">ManageVideo</a>
								 
								</div>
							  </li>
							  {{-- <li class="nav-item"><a class="nav-link dropdown-item" href="/admin" title="open the news menu">ManageAdmin</a></li>
							  <li class="nav-item"><a class="nav-link dropdown-item" href="/Trainer" title="open the news menu">ManageTrainer</a></li>
							  <li class="nav-item"><a class="nav-link dropdown-item" href="/student" title="open the news menu">ManageStudent</a></li>
							  <li class="nav-item"><a class="nav-link dropdown-item" href="/library" title="open the news menu">Manageresourse</a></li>
							  <li class="nav-item"><a class="nav-link dropdown-item" href="/Course" title="open the news menu">ManageCourse</a></li>
							  <li class="nav-item"><a class="nav-link dropdown-item" href="/videos" title="open the news menu">ManageVideo</a></li>
							   --}}
							   
							   <li class="nav-item"><a class="nav-link dropdown-item" href="/tasks" title="open the news menu">task</a></li>
							  {{-- <li class="nav-item" id="id_for_cdu_link"> task</li>
							  <li class="nav-item" id="id_for_cdu_link"> Post</li>
							  <li class="nav-item" id="id_for_cdu_link"> Comment</li> --}}
						  </ul>
						  <ul class="nav navbar-nav float-md-right">
						  
								  
								  
								  
								  <ul class="nav navbar-nav float-md-right hidden-xs" role="tablist">
						{{-- <li class="nav-item" role="presentation">
							<a href="#" title="Search into the website" class="icon-search nav-link"><span class="sr-only">Search into the website</span></a>
						</li> --}}
						</ul>
							  </li>
							  <li role="presentation" class="nav-item dropdown">
								  <a href="#" class="dropdown-toggle active" data-toggle="dropdown">
									<i class="fas fa-sign-out-alt"></i>
									  <span class="hidden-xs hidden-sm">&nbsp;Exit
										  <span class="orange"></span>&nbsp;
									  </span><b class="caret" aria-hidden="true"></b>
	
								  </a>
								  <ul class="dropdown-menu">
									  
									  <li><a class="dropdown-item" href="/trainer/logout">Trainerlogout</a></li>
									  {{-- <li><a class="dropdown-item" href=""> </a></li> --}}
								  </ul>
							  </li>
						  </ul>
				  </div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			@endif
		</header>
- 
		 {{-- <form  action="/search" class="form-inlines mt-2 mt-md-0" method="get">
	
			<input class="form-controls mr-sm-2 "  name="search" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-secondary btn-inverse my-2 my-sm-0" type="submit" style="background:black;color:white">Search</button> 
		  </form>  --}}
        @yield('main')
		

		<footer role="contentinfo">
			<div class="container">
				<span class="navbar-left">© Coding Academy By Orange 2021</span>
				<span id="id_for_cdu_link" class="navbar-right"></span>
			</div>
		</footer>


		<!-- Placed at the end of the document so the pages load faster -->
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins bootstrap, bootstrap accessibility plugin and boosted specific components (below), or include individual files as needed -->
    <script src="{{asset('assest/boosted-4.0.0-alpha.5-dist/js/boosted.js')}}"></script>
		<script type="text/javascript">
			// Surcharge des valeurs du script de la toolbar
			accessibilitytoolbar_custom={
				idSkipLinkIdLinkMode:"cdu_skiplink",
				cssSkipLinkClassName: "skiplinks_trigger",
				callback:skiplinksAfterLoad
			};

			$(".skiplinks_trigger").focus(function(){
				$(".skiplinks-section").addClass("skiplinks-show").removeClass("sr-only")
			});
			$(".skiplinks_trigger").blur(function(){
				$(".skiplinks-section").removeClass("skiplinks-show").addClass("sr-only")
			});

			function skiplinksAfterLoad(){
				$(".skiplinks_trigger").focus(function(){
					$(".skiplinks-section").addClass("skiplinks-show").removeClass("sr-only")
				});
				$(".skiplinks_trigger").blur(function(){
					$(".skiplinks-section").removeClass("skiplinks-show").addClass("sr-only")
				});
			}

		</script>

		<script type="text/javascript" src="https://comfort.orange.com/serveur/crossdom/js/toolbar-min.js"></script>
		@yield('Links')
	</body>
</html>