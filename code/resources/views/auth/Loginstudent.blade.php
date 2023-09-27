
<!DOCTYPE html><html lang="en" dir="">
    <head>
        <style type="text/css">#loading{background-color:#17607d;height:100%;width:100%;position:fixed;z-index:1;margin-top:0;top:0}#loading-center{width:100%;height:100%;position:relative}#loading-center-absolute{position:absolute;left:50%;top:50%;height:200px;width:200px;margin-top:-100px;margin-left:-100px;-ms-transform:rotate(-135deg);-webkit-transform:rotate(-135deg);transform:rotate(-135deg)}.object{-moz-border-radius:50% 50% 50% 50%;-webkit-border-radius:50% 50% 50% 50%;border-radius:50% 50% 50% 50%;position:absolute;border-top:5px solid #fff;border-bottom:5px solid transparent;border-left:5px solid #fff;border-right:5px solid transparent;-webkit-animation:animate 2s infinite;animation:animate 2s infinite}#object_one{left:75px;top:75px;width:50px;height:50px}#object_two{left:65px;top:65px;width:70px;height:70px;-webkit-animation-delay:.2s;animation-delay:.2s}#object_three{left:55px;top:55px;width:90px;height:90px;-webkit-animation-delay:.4s;animation-delay:.4s}#object_four{left:45px;top:45px;width:110px;height:110px;-webkit-animation-delay:.6s;animation-delay:.6s}@-webkit-keyframes animate{50%{-ms-transform:rotate(360deg) scale(.8);-webkit-transform:rotate(360deg) scale(.8);transform:rotate(360deg) scale(.8)}}@keyframes animate{50%{-ms-transform:rotate(360deg) scale(.8);-webkit-transform:rotate(360deg) scale(.8);transform:rotate(360deg) scale(.8)}}</style>
        <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <title>Student Login form</title>
            <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    <meta name="keywords" content="Elevatus" >
    <meta name="description" content="Elevatus" >
    <link href="https://orange.elevatus.jobs/assets/bootstrap/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" >
    <link href="https://orange.elevatus.jobs/assets/css/front-style.css" media="screen" rel="stylesheet" type="text/css" >
    <link href="https://orange.elevatus.jobs/assets/css/combine.css" media="screen" rel="stylesheet" type="text/css" >
    <link href="https://orange.elevatus.jobs/assets/sweetalert/sweetalert.css" media="screen" rel="stylesheet" type="text/css" >
    <link href="https://orange.elevatus.jobs/assets/css/style_custom.css?1619304524" media="screen" rel="stylesheet" type="text/css" >
    <link href="https://orange.elevatus.jobs/assets/css/design.css?1619304524" media="screen" rel="stylesheet" type="text/css" >
    <link href="https://orange.elevatus.jobs/assets/css/portal.css?1619304524" media="screen" rel="stylesheet" type="text/css" >
    <link href="https://orange.elevatus.jobs/assets/css/newlayout.css?1619304524" media="screen" rel="stylesheet" type="text/css" >
    
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
    
    
    <!--    <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>-->
        
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
            
    
    
    
                        </div>
                <div class="fullwidthdiv" id="content" >
                            <style>
    .labeltype input{width:100%;height:100%;opacity:0;position:absolute;cursor:pointer;}
    .labeltype label{width:100% !important;height:100%;text-align:center !important;color:#333;font-family:'poppinsmedium';font-size:2vw;border-radius:4px;    padding: 10px;margin-bottom:0;}
    .labeltype label img{vertical-align:middle;margin-bottom:5px;}
    .labeltype input:checked+label,.labeltype input:hover+label{color:#fff;background:#7a6fbe;cursor:pointer;}
    @media(max-width:767px){
        .labeltype label{font-size:20px;}
    }
    @media(max-width:500px){
        .labeltype label{font-size:16px;}
        .labeltype label img{max-width:55px;}
    }
    </style>
    
    
    <div class="newlogin  d-table vh100" style="height:100vh;">
        <div class="d-tabel-cell form_sec align-middle ">	
            <div class="outer_div">
            <div class="login_logo">
                                   <a href="https://orange.elevatus.jobs">
                                        <img src="https://d1opaoaaku6e7i.cloudfront.net/portal/image/2019/09/portal-images/100/1568108309-70f6ff75723a3857d7f76a9f8c152d869055ede4.png"  />
                                </a>
                        </div>
                <div class="form_inner_div">
                    <div class="title">Login to Your Student Account</div>
                  
                    <form method="POST" action="{{ route('student.login.submit') }}">
                        @csrf
                    <div class="form-elements">
                        <label>Email Address</label>
                         <div class=" form-group ">
    <input type="text" name="email" id="email" value="" class="form-control required email" placeholder="@example.com">
    @error("email")
    <p style="color:red;">{{$message}}</p>
    @enderror
</div>                </div>	
                     <div class="form-elements">
                        <label>Password</label><div class="pull-right"> </div>
                           <div class=" form-group ">
    <input type="password" name="password" id="client_password" value="" class="form-control  required" autocomplete="off" placeholder="**********"></div>                </div>	
                           
    @error("password")
    <p style="color:red;">{{$message}}</p>
    @enderror 
                            <div class="text-center form_btn">
                            <div class="">
    <button name="bttnsubmit" id="bttnsubmit" type="submit" value="
    Log In" class="SiteGreenBtnClass loginbtn font-15">
    Log In</button>

</div>  

    


</div>
                        
                            
                            </form>
                                           
                                       </div>
            </div>	
        </div>
       
        <div class="d-tabel-cell side_sec side_image_sec vertical-middle text-center hidden-sm hidden-xs" style="background-color:rgb(255,108,1)">
            <img src="https://orange.elevatus.jobs/assets/pics/addonimg/logincenterimage.png" />
        </div>
        
    </div>
    
    
    <div class="modal fade" id="usertypemodal" tabindex="-1" role="dialog" aria-labelledby="save-search-modalLabel" data-backdrop="static">
        <div class="modal-dialog" role="document" style="max-width:717px; width:100%;">
        <form method="post" action="https://orange.elevatus.jobs/social/savetypedata">
            <div class="modal-content" style="">
                <div class="modal-header">               
                    <h4 class="modal-title">Choose User Type</h4>
                </div>
                
                <div class="modal-body" style="padding:35px 0px;">
                    
                         <div class="userTypeRadio">
                            <div class="providerRadio text-center" style="padding:0 5%;">
                            
                            <div class="row margin0">
                                                    <div class="col-xs-6">   
                                <div class="labeltype checked">                   
                                    <input type="radio" id="client_type-candidate" checked name="client_type" class="" value="candidate">
                                    <label for="client_type-candidate" class="radioLables"><img src="https://orange.elevatus.jobs/assets/pics/client.png" class="inline-block" /><br />Candidate</label>
                                </div>
                            </div>
                                                    <div class="col-xs-6">   
                                <div class="labeltype ">                   
                                    <input type="radio" id="client_type-employer"  name="client_type" class="" value="employer">
                                    <label for="client_type-employer" class="radioLables"><img src="https://orange.elevatus.jobs/assets/pics/provider.png" class="inline-block" /><br />Employer</label>
                                </div>
                            </div>
                                                    </div>
                            </div>
                            </div>
                          
                             
                             
                </div>
                <div class="modal-footer">
                            <div class="">
                                <input type="submit" value="Save" class="SiteBtnClass" />
                            </div>
                            </div>
            </div>
            </form>
        </div>
    </div>
    
    <style type="text/css">
    
    .rgFormWisardInner input.form-control{ font-family:'gotham_medium' !important ; } 
    .socialBtnDiv hr:after{ background:#8CE8E5;}
    .rgProviderFormMain{ padding:0px; } 
    .social_join_btn:hover{ border-color:#222; } 
    @media(max-width:767px){
        .home_first_right_div{ text-align:center !important; }
    }
    </style>
    
    <script>
    $('#bttnsubmit.loginbtn').click(function(e) {	
        e.preventDefault();
        if($('.profile_form').valid()){
            $('#client_password').val(btoa($('#client_password').val()));	
            $('.profile_form').submit();
        }
        
    });
    function loginType(Type){
        var checkdVal = $('.providerRadio .Radio:checked').val();
        if(Type=='linkedIn'){
            window.location.href=APPURL+'/social/auth/uType/'+checkdVal;
        }
    }
    $(document).ready(function(e) {
        
        window.history.pushState({}, document.title, "/" + "login");
    });
    </script></div>
                        
                
    </div>
    </div>
    
    <script>
    
        $(document).ready(function (e) {
            $(".preloader").fadeOut("slow");
        });
        // var Yh6ds = $('#Hguy5FSr').val();
    
        function postjobNotice() {
            $.alert({
                title: 'Sorry',
                content: 'You have no credits to a post job for now in your subscription, please recharge your credit by subscribing to one of our packages or by buying Job post credits from the subscription page',
                buttons: {
                    loginNow: {
                        text: 'Subscribe Now',
                        action: function () {
                            window.location.href = 'https://orange.elevatus.jobs/subscription';
                        }
                    },
                    Ok: function () {
    
                    },
                }
            });
        }
    </script>
    <script type="text/javascript" defer="defer" src="https://orange.elevatus.jobs/assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" defer="defer" src="https://orange.elevatus.jobs/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" defer="defer" src="https://orange.elevatus.jobs/assets/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" defer="defer" src="https://orange.elevatus.jobs/assets/js/combine.js"></script>
    <script type="text/javascript" defer="defer" src="https://orange.elevatus.jobs/assets/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript" defer="defer" src="https://orange.elevatus.jobs/assets/js/app-util.js?1619304524"></script>
    <script type="text/javascript" defer="defer" src="https://orange.elevatus.jobs/assets/js/custom.js"></script><div class="modal fade" id="module_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width:700px;">
            <div class="modal-content uhs-modal">
                <button type="button" class="close modalclosebtn" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                            <div class="modal-body">
    
                </div>
            </div>
        </div>
    </div>
    </body>
    
        <style type="text/css">
            .headerMain {
                background-color: #fff !important;
            }
        </style>
    
    
    </html>
    <script>
        $(window).load(function (e) {
            if ($(window).width() <= 991) {
                $('body').removeAttr('data-spy');
                $('body').removeAttr('data-target');
                //
            }
        });
    
        </script>
    
    
    
    
    