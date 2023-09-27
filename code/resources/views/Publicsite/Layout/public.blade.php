<!DOCTYPE html><html lang="en" dir="">
<head>
    <style type="text/css">#loading{background-color:#000000;height:100%;width:100%;position:fixed;z-index:1;margin-top:0;top:0}#loading-center{width:100%;height:100%;position:relative}#loading-center-absolute{position:absolute;left:50%;top:50%;height:200px;width:200px;margin-top:-100px;margin-left:-100px;-ms-transform:rotate(-135deg);-webkit-transform:rotate(-135deg);transform:rotate(-135deg)}.object{-moz-border-radius:50% 50% 50% 50%;-webkit-border-radius:50% 50% 50% 50%;border-radius:50% 50% 50% 50%;position:absolute;border-top:5px solid #fff;border-bottom:5px solid transparent;border-left:5px solid #fff;border-right:5px solid transparent;-webkit-animation:animate 2s infinite;animation:animate 2s infinite}#object_one{left:75px;top:75px;width:50px;height:50px}#object_two{left:65px;top:65px;width:70px;height:70px;-webkit-animation-delay:.2s;animation-delay:.2s}#object_three{left:55px;top:55px;width:90px;height:90px;-webkit-animation-delay:.4s;animation-delay:.4s}#object_four{left:45px;top:45px;width:110px;height:110px;-webkit-animation-delay:.6s;animation-delay:.6s}@-webkit-keyframes animate{50%{-ms-transform:rotate(360deg) scale(.8);-webkit-transform:rotate(360deg) scale(.8);transform:rotate(360deg) scale(.8)}}@keyframes animate{50%{-ms-transform:rotate(360deg) scale(.8);-webkit-transform:rotate(360deg) scale(.8);transform:rotate(360deg) scale(.8)}}</style>
    <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>@yield('title')</title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="keywords" content="Elevatus" >
<meta name="description" content="Elevatus" >
{{-- C:\Users\orange\MasterProject\public\js\read.js --}}
<link href="https://orange.elevatus.jobs/assets/bootstrap/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" >
<link href="https://orange.elevatus.jobs/assets/css/front-style.css" media="screen" rel="stylesheet" type="text/css" >
<link href="https://orange.elevatus.jobs/assets/css/combine.css" media="screen" rel="stylesheet" type="text/css" >
<link href="https://orange.elevatus.jobs/assets/sweetalert/sweetalert.css" media="screen" rel="stylesheet" type="text/css" >
<link href="https://orange.elevatus.jobs/assets/css/style_custom.css?1611561312" media="screen" rel="stylesheet" type="text/css" >
<link href="https://orange.elevatus.jobs/assets/css/design.css?1611561312" media="screen" rel="stylesheet" type="text/css" >
<link href="https://orange.elevatus.jobs/assets/OwlCarousel2/dist/owl.carousel.min.css" media="screen" rel="stylesheet" type="text/css" >
<link href="https://orange.elevatus.jobs/assets/OwlCarousel2/dist/owl.theme.default.min.css" media="screen" rel="stylesheet" type="text/css" >
<link href="https://orange.elevatus.jobs/assets/css/colorbox.css" media="screen" rel="stylesheet" type="text/css" >
<link href="https://orange.elevatus.jobs/assets/css/newlayout.css?1611561312" media="screen" rel="stylesheet" type="text/css" >
<link rel="apple-touch-icon" href="/docs/4.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.2/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/favicon.ico">
<script src="https://kit.fontawesome.com/7ae71a9832.js" crossorigin="anonymous"></script>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
                            <meta name="description" content="Orange">
                <meta prefix="og: http://ogp.me/ns#" property="og:title" content="Orange"/>
                <meta prefix="og: http://ogp.me/ns#" property="og:image" content=""/>
                <meta prefix="og: http://ogp.me/ns#" property="og:url" content="https://orange.elevatus.jobs"/>
                <meta property="fb:app_id" content="207138819884393"/>
                <meta prefix="og: http://ogp.me/ns#" property="og:description" content="Orange"/>
                <link rel="image_src" href=""/>
                <meta prefix="og: http://ogp.me/ns#" property="og:type" content="website"/>
                            <link rel="stylesheet" href="https://orange.elevatus.jobs/assets/css/portal.css"/>
                <link rel="icon" type="image/png" sizes="16x16" href="https://www.orange.jo/_layouts/15/orangecms2013/orangecms2013/en/assets/favicon.ico">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

    <script src="/assets/js/html5shiv.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->
    @yield('link')
  
    <div class="collapse bg-light" id="collapseSearch">
    <div class="container py-3">
      <form class="d-flex" role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    </div>


<!--    <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js"></script>
        <script>
        navigator.sayswho= (function(){
            var ua= navigator.userAgent, tem,
                M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
            if(/trident/i.test(M[1])){
                tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
                return 'IE '+(tem[1] || '');
            }
            if(M[1]=== 'Chrome'){
                tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
                if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
            }
            M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
            if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
            return M;
        })();


        var loggedUserId = '';
        var baseUrl = APPURL = SITE_URL = '';
        var APPURL = '';
        var moduleName = '';
        var controllerName = 'index';
        var actionName = Actionname = 'index';
        var routeName = '';
        var SITE_HTTP_URL = 'https://orange.elevatus.jobs';
        var SITENAME = 'Elevatus';
        var t_p = '';
        var HTTP_POST_VIDEOS_PATH = 'https://d1opaoaaku6e7i.cloudfront.net/home-slider-videos';
        var AVTBIGURL = 'https://d1opaoaaku6e7i.cloudfront.net/profile-images';
        var extError = "Uploaded file is not a valid image. Only JPG,PNG and JPEG files are allowed.";
        var AvtUpdated = "Your profile image has been updated";
        var PwdUserError = "Username and password must not be same";
        var PleaseWait = 'Please Wait';
        var VideoUploadedMsg = 'Video successfully uploaded';
        var vdoupmsg = 'Video Uploaded';
        var needloginMasg = 'You need to login first!';
        var pleaseloginMsg = 'Plaese click on the below button to Login.';
        var loginNowmsg = 'Login Now';
        var cancelMsg = 'Cancel';
        var followingmsg = 'Following';
        var followmsg = 'Follow';
        var Filenotallowed = 'File type not allowed';
        var videoextError = 'Uploaded file type is not allowed. Allowed extensions are (mov,mp4,flv,wmv,mpeg,avi,mpg)';
        var VENDORSURL = "https://orange.elevatus.jobs/assets";
        var CSSURL = "https://orange.elevatus.jobs/assets/css";
        var ADMIN_APPURL = "https://orange.elevatus.jobs/elevatus-admin-portal";
        var PORTAL_IMAGES_PATH = "https://d1opaoaaku6e7i.cloudfront.net/portal-images";
        $(document).ready(function (e) {
            var minlength7 = 'Please enter at least 7 characters';
            $.extend($.validator.messages, {
                required: 'This field is required',
                email: 'Enter a valid email address',
                minlength: 'Please enter at least 6 characters',
                extension: 'Invalid Attachment extension',
                number: 'Please enter a valid number.',
                maxlength: 'Please enter no more than {0} characters.',
                digits: 'Please enter only digits.',
                equalTo: 'Password mismatch. Please reconfirm password.',
            });
        });
    </script>
            <style type="text/css">
            .new_content_wrapper {
                padding-top: 60px;
                padding-bottom: 60px;
            }
            .headerMain {
    background-color: #fff !important;
    border-bottom: 1px solid #d0d0d0;}

    /*scroll*/
    .o-scroll-up::after {
    display: inline-block;
    width: 2.5rem;
    height: 2.5rem;
    margin-left: .625rem;
    content: "";
    background: #fff url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 9 14'%3e%3cpath d='M9 2L7 0 0 7l7 7 2-2-5-5 5-5z'/%3e%3c/svg%3e) no-repeat center/50% 50%;
    border: .125rem solid #000;
    transform: rotate(90deg);
}

        </style>
            <script async
            src="https://www.googletagmanager.com/gtag/js?id=UA-135025708-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-135025708-1');
    </script>
    <style>
        .loggedheader{
            width:100% !important;
        }
        .content_div{
            width:88% !important;
        }
    </style>
</head>
<body data-spy="scroll" data-target="#scroll-spy" style="position:relative;">

<style type="text/css">
    [role=progressbar]{position:relative;padding:0;width:100px;height:25px;list-style:none}[role=progressbar] li{display:block;position:absolute;right:0;width:3px;height:25px;border-radius:1px;-webkit-transform-origin:50% 100%;transform-origin:50% 100%;background-color:#edb332;-webkit-animation:bar linear 2.8s infinite;animation:bar linear 2.8s infinite;will-change:transform}[role=progressbar] li:nth-child(1){-webkit-transform:translateX(0) rotate(0);transform:translateX(0) rotate(0);opacity:.2}[role=progressbar] li:nth-child(2){-webkit-transform:translateX(-15px) rotate(0);transform:translateX(-15px) rotate(0);-webkit-animation-delay:-.4s;animation-delay:-.4s}[role=progressbar] li:nth-child(3){-webkit-transform:translateX(-30px) rotate(0);transform:translateX(-30px) rotate(0);-webkit-animation-delay:-.8s;animation-delay:-.8s}[role=progressbar] li:nth-child(4){-webkit-transform:translateX(-45px) rotate(10deg);transform:translateX(-45px) rotate(10deg);-webkit-animation-delay:-1.2s;animation-delay:-1.2s}[role=progressbar] li:nth-child(5){-webkit-transform:translateX(-60px) rotate(40deg);transform:translateX(-60px) rotate(40deg);-webkit-animation-delay:-1.6s;animation-delay:-1.6s}[role=progressbar] li:nth-child(6){-webkit-transform:translateX(-75px) rotate(62deg);transform:translateX(-75px) rotate(62deg);-webkit-animation-delay:-2s;animation-delay:-2s}[role=progressbar] li:nth-child(7){-webkit-transform:translateX(-90px) rotate(72deg);transform:translateX(-90px) rotate(72deg);-webkit-animation-delay:-2.4s;animation-delay:-2.4s}@-webkit-keyframes bar{0%{-webkit-transform:translateX(0) rotate(0);transform:translateX(0) rotate(0);opacity:0}14.28%{-webkit-transform:translateX(-15px) rotate(0);transform:translateX(-15px) rotate(0);opacity:1}28.56%{-webkit-transform:translateX(-30px) rotate(0);transform:translateX(-30px) rotate(0);opacity:1}37.12%{-webkit-transform:translateX(-39px) rotate(0);transform:translateX(-39px) rotate(0);opacity:1}42.84%{-webkit-transform:translateX(-45px) rotate(10deg);transform:translateX(-45px) rotate(10deg);opacity:1}57.12%{-webkit-transform:translateX(-60px) rotate(40deg);transform:translateX(-60px) rotate(40deg);opacity:1}71.4%{-webkit-transform:translateX(-75px) rotate(62deg);transform:translateX(-75px) rotate(62deg);opacity:1}85.68%{-webkit-transform:translateX(-90px) rotate(72deg);transform:translateX(-90px) rotate(72deg);opacity:1}100%{-webkit-transform:translateX(-105px) rotate(74deg);transform:translateX(-105px) rotate(74deg);opacity:0}}@keyframes bar{0%{-webkit-transform:translateX(0) rotate(0);transform:translateX(0) rotate(0);opacity:0}14.28%{-webkit-transform:translateX(-15px) rotate(0);transform:translateX(-15px) rotate(0);opacity:1}28.56%{-webkit-transform:translateX(-30px) rotate(0);transform:translateX(-30px) rotate(0);opacity:1}37.12%{-webkit-transform:translateX(-39px) rotate(0);transform:translateX(-39px) rotate(0);opacity:1}42.84%{-webkit-transform:translateX(-45px) rotate(10deg);transform:translateX(-45px) rotate(10deg);opacity:1}57.12%{-webkit-transform:translateX(-60px) rotate(40deg);transform:translateX(-60px) rotate(40deg);opacity:1}71.4%{-webkit-transform:translateX(-75px) rotate(62deg);transform:translateX(-75px) rotate(62deg);opacity:1}85.68%{-webkit-transform:translateX(-90px) rotate(72deg);transform:translateX(-90px) rotate(72deg);opacity:1}100%{-webkit-transform:translateX(-105px) rotate(74deg);transform:translateX(-105px) rotate(74deg);opacity:0}}[role=progressbar]{margin:0 auto}@media all and (-ms-high-contrast:none){.preloaderInner{position:static;margin-top:5%}}
    </style>

<div id="wrapper">
    <div class="fullwidthdiv " id="header">
        



                        <div class="headerMain"  >
    <div class="container" style=" color:white">
        <div class="col-md-2 col-sm-6 col-xs-8 headerLogo p0">

            <a href="/home" style="display:inline-block; padding:8px 0; max-height: 54px">
                                    <img src="https://d1opaoaaku6e7i.cloudfront.net/portal/image/2019/09/portal-images/100/1568108309-70f6ff75723a3857d7f76a9f8c152d869055ede4.png" style=" max-height: 54px"  />
                            </a>
            <div class="visible-xxs pull-right">
                <button id="button-main-menu" class="button--header popover-button nostyle " onclick="navBarToggle()">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-5 header-search-div hidden-xs hidden-sm" style="padding-right:0px;">
            <ul class="newheader_ul" style="  margin:24px 0 !important;  " >
                                                                            <li><a href="/AllCourses">Course</a></li>
                                                                            <li><a href="/Resource">Resource</a></li>
                                                                    {{-- <li><a href="">Event</a></li> --}}
                                                                   
                    
                            

          {{-- <li><a class="" href="{{route('student.profile',Auth::guard('student')->id())}}" >Profile</a></li> --}}
          </ul>

        </div>
        <div class="col-md-6 col-sm-6 col-xs-4 headerLinks p0 " id="navBarDiv" style="text-align:right;">
                        <div class="hidden-xxs">
                <button id="button-main-menu" class="button--header popover-button nostyle " onclick="navBarToggle()">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <div class="headerLinksInner respHeaderUl" style="display:inline-block; vertical-align:bottom;  padding:15px 0px; ">
                <button class="buttonCloseNav" onclick="navBarToggle()"><span></span><span></span></button>
                <ul class=" ">
                                            <li style="margin-left:0px;"><a href="/chat" target="_blank" class="portal_btn" style="display:inline-block;padding:7px 15px;font-family:'Roboto-Regular';color:#fff;letter-spacing: initial; border:none;background-color:rgb(255,108,1)">join Chat area</a></li>
                    
                                            <li>
                            <!-- <a href="https://twitter.com/orangejo" target="_blank"><i class="fa fa-twitter"></i></a>                            <a href="https://web.facebook.com/OrangeJordan?_rdc=1&_rdr" target="_blank"><i class="fa fa-facebook"></i></a>                            <a href="https://www.instagram.com/orangejo/" target="_blank"><i class="fa fa-instagram"></i></a>                            <a href="https://www.linkedin.com/company/orange-jordan/" target="_blank"><i class="fa fa-linkedin"></i></a>                                                                                </li> -->
                                                                <li class="visible-xs"><a href="/AllCourses" data-id="perk" onclick="gotodiv('perk',this);"> Course</a></li>
                                                                <li class="visible-xs"><a href="javascript:void(0)" data-id="gallery" onclick="gotodiv('gallery',this);">Resource</a></li>
                                                           
                                            <li><a class="" href="/student/logout">Log out</a></li>
                        <li><a class="" href="{{route('student.profile',Auth::guard('student')->id())}}" >Profile</a></li>
                                            
                                    </ul>
            </div>
        </div>
    </div>
</div>
<!-- <div class="container py-3">
<div class="row ml-20">
      <form class="d-flex" role="search">
      

      <div class="col-sm-5">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          </div>

          <div class="col-sm-5">
          <a href="#" class="btn btn-primary">Go somewhere</a>
          <button class="btn btn-primary my-6 my-sm-0 ml-2"  type="submit">Search</button>
          </div>
        
      </form>
      </div>
    </div> -->

@yield('main')



    
{{-- <nav role="navigation">
    <a href="#" class="o-scroll-up is-fixed" title="Back to top">
      <span class="d-none d-sm-inline-block">Back to top</span>
    </a>
  </nav> --}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://orange.elevatus.jobs/assets/js/jquery.slimscroll.js" defer="defer"></script>
<script>
    function gotodiv(div_name,obj)
    {
        
        if($(window).scrollTop()>0) {
            $('html, body').animate({
                'scrollTop' : $("#"+div_name+"_div").position().top-71
            },1000);
        } else {
            $('html, body').animate({
                'scrollTop' : $("#"+div_name+"_div").position().top-142
            },1000);
        }
        $('.newheader_ul li').removeClass('active');
        $(obj).parent('li').addClass('active');
        $('.headerLinks').removeClass('active');
            }

    $(window).load(function(e) {
            });


    $(document).ready(function(e) {
        $('.addthis-smartlayers').remove();
    });



    var WinWidth = $(window).innerWidth();
    var notiClicked = 0;
    $(function(e){
        $('.notificationHeader .notificationUl ul').slimScroll({
            height: '250px'
        });
    });

    if(WinWidth < 851){
        var Html = $('.headerLinks li.notificationHeader').html();
        $('.headerLinks li.notificationHeader').remove();
        $('.respHeaderNoti').html(Html);

    }

    function setlang(lang){
        $.ajax({
            type: "POST",
            url: APPURL+'/index/setlanguage/langcode/'+lang,
            async:false,
            success: function(data){
                window.location.href = window.location.href;
            }
        });
    }

    function navBarToggle(){
        if($('#navBarDiv').hasClass('active')){
            $('#navBarDiv').removeClass('active');
        }else{
            $('#navBarDiv').addClass('active');
        }
    }

    function readNotiData(notice_id,notice_url){
        $.ajax({
            url:APPURL+'/readnotification',
            data:{notice_id:notice_id},
            success:function(data){
                //alert(data);
                window.location.href = notice_url;
            }
        });
    }

    function setNotifications(){
        $.ajax({
            url:APPURL+'/setnotifications',
            data:{},
            success:function(data){
                $('.circleicon').remove();
            }
        });
    }

    function submitsearchform(form){
        $(form).parents("form").submit();
    }

</script>                        </div>
            <div class="fullwidthdiv" id="content" >
                            <style>
        .job_box {padding-right: 85px;}
        .opening_div ul li {vertical-align: top;}
        a {color: rgb(255,108,1);}
        a:hover {color: rgb(255,108,1);}
        /*scrool*/
        
#myBtn {
  display: none;
  position: fixed;
  bottom: 100px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: rgb(255,108,1);
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
    </style>

{{-- <nav role="navigation">
    <a href="#" class="o-scroll-up is-fixed" title="Back to top">
      <span class="d-none d-sm-inline-block">Back to top</span>
    </a>
  </nav> --}}

</div>


{{-- <a href="#" class="o-scroll-up" title="back to top"><span class="o-scroll-up-text d-none d-sm-inline-block " style="display:grid;justify-content: end;">Back to top</span><span class="o-scroll-up-icon"  style="display:grid;justify-content: end;"aria-hidden="true"></span></a> --}}
<!-- end mod -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>



<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

<script src="/docs/4.2/assets/js/vendor/popper.min.js"></script><script src="/docs/4.2/dist/js/boosted.bundle.min.js" crossorigin="anonymous"></script><!-- boosted mod -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.29.4/js/jquery.tablesorter.min.js" integrity="sha256-eMa5IMxi2DRTBbnBSoK/sTKxDkVo8uqM7jMgKFfMoiU=" crossorigin="anonymous"></script>
<script>window.jQuery.tablesorter || document.write('<script src="/docs/4.2/assets/js/vendor/jquery.tablesorter.min.js"><\/script>')</script>
<!-- end mod --><script src="/docs/4.2/assets/js/docs.min.js"></script><script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    $('.o-nav-local').prioritynav();
    $('#docs-navbar').navbar({sticky: true});
  })
</script>
                    <div class="" id="footer" >
                <div class="new_footer_div" style="background:black" >
	<span style="color:#fff;">Powered by &nbsp;&nbsp;&nbsp;Coding Academy by Orange</span>


            </div>
            
</div>
</div>







    