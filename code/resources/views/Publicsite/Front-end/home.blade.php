
                   @extends('Publicsite.Layout.public')
                   @section('title')
Coding Academy by Orange
@endsection
                   @section('link')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="{{asset('CSSFrontend\home.css')}}">
                   @endsection
                   
                   @section('main')
            <div class="fullwidthdiv" id="content" >
                           
    <!--- start slider-->
    <div class="row margin0" >
        <div class="col-sm-12 padding0">
            <div class="landing_banner" style=" background-color:rgba(0,0,0,1)">
                <div class="inner_landing_banner">
                                            <h1 style="color:rgb(255,108,1)">Welcome to  Coding Academy by Orange</h1>
                                                                <h3 style="color:rgb(255,108,1)">  Coding Academy - Your Ticket to Success

</h3>
                                                                <a href="javascript:void(0)" onclick="gotodiv('opening');" class="opening_btn"
                           style=" background-color:rgb(255,108,1)">Let's Go</a>
                        
                </div>
            </div>
        </div>
    </div>

    <!---end slider-->
                        <div class="row margin0">
                <div class="container">
                    <div class="second_banner">
                        <div class="row margin0">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div style="display:inline-block; width:100%;">
                                                                            
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <main role="main">

                <!-- Main jumbotron for a primary marketing message or call to action -->
                {{-- <div class="jumbotron">
                  <div class="container">
                    <h1 class="display-3">Hello, world!</h1>
                    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button" style=" background-color:rgb(255,108,1)">Learn more &raquo;</a></p>
                  </div>
                </div> --}}
              
                <div class="container">
                  <!-- Example row of columns -->
                  <div class="row">
                    <div class="col-md-4">
                      <h2 class="title">The Challenge</h2>
                      <p class="comment more">Technology Sector is one of the fastest growing sectors today, it’s no surprise that the global market is in dire need of qualified programmers, software, and web developers, as well as other digital and technology experts.

                        To address this challenge and ensure the development local business and economy, we have initiated Orange Jordan Coding Academy program.</p>
                  
                    </div>
                    <div class="col-md-4  ">
                      <h2 class="title">Academy Objectives</h2>
                      <p class="comment more">You will:
                       
                              
                            Improve your communication skills,
                              
                               Enhance your skills in web development, mobile applications and creating new ideas,
                               Sharpen your soft skills; enhance your self-confidence and business,
                               Fortify your programming knowledge and    increase your knowledge in everything new in the world of technology,
                              Jump-start your career and shape your future in the best way possible,
                                Develop your overall capabilities and open doors to new opportunities in your life </p>

                            {{-- <a href="javascript:void();" class="readmore-btn">ReadMore</a> --}}
                      
                       
                       
                       
                      {{-- <p><a class="btn btn-secondary" href="#" role="button" onclick="myFunction()" id="myBtn">Readmore &raquo;</a></p> --}}
                    </div>
                    <div class="col-md-4">
                      <h2 class="title">Our Mission</h2>
                     
                     
                        <p class="comment more">Train and empower youth to enhance their opportunities in technology sector in Jordan,
                  
                        Address the local and global markets’ needs for qualified programmers,
                      
                       Lead the digital transformationin the Kingdom,
                       Offer youth a second chance to start a career in programming  </p>
                       

                   
                    
                      {{-- <p><a class="btn btn-secondary" href="#" role="button" onclick="myFunction()" id="myBtn">Readmore &raquo;</a></p> --}}
                    </div>
                  </div>
              
                  <hr>
              
                </div> <!-- /container -->
              
              </main>          
            




                                                                                                <div class="row margin0 team_bgcolor">
                    <div class="col-sm-12 bgcontainer">
                        <div class="container">
                            <div class="team_div">
                                <h3 class="ourteam">Our Codimg Academy team</h3>
                                {{-- <h4 class="ourteam">We come from diverse backgrounds and various corners of the globe</h4> --}}
                                
                                                                     
                                            
                                    <ul class="team_ul">
                                        @foreach($show_trainer as $Trainer)                            
                                           <li>
                                                <div class="imgdiv">
   
                                                    <img src='{{asset("Trainerimages/$Trainer->image")}}'class="img-responsive inline-block"/>
                                                                                                                                                            </div>
                                                <h3>{{$Trainer->name_Trainer}}</h3>
                                                <h4>{{$Trainer->eduction_Trainer}}</h4>
                                            </li>
                                              @endforeach                                  
                                                                                  
                                                                              
                                        
                                </ul>
                                <div class="h10 clearfix">&nbsp;</div>
                                                                <div class="h10 clearfix">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margin0" id="opening_div">
                <div class="col-sm-12">
                    <div class="container">
                        <div class="opening_div">

                                                            <h3 class="ourskills">Our Skills</h3>
                                
                            <ul>
                                            <li  >
                                                <a target="_blank"
                                                   href="https://orange.elevatus.jobs/job-details/NTE1/senior-communication-advisor">
                                                    <div class="job_box">
                                                        <h3 class="ourskills" >Back-End</h3>
                                                                                                                    <h4>
                                                               PHP ,Laravel, MYSQL,Python  </h4>                                                          </h4>
                                                                                                                

                                                    </div>
                                                </a>
                                            </li>
                                            <li  >
                                                <a target="_blank"
                                                   href="https://orange.elevatus.jobs/job-details/NTE1/senior-communication-advisor">
                                                    <div class="job_box">
                                                        <h3 class="ourskills" >Front-End</h3>
                                                                                                                    <h4>
                                                              HTML5,CSS3,JS,React,and more ...    </h4>                                                        </h4>
                                                                                                                

                                                    </div>
                                                </a>
                                            </li>   
                                            
                                            
                                            <li  >
                                                <a target="_blank"
                                                   href="https://orange.elevatus.jobs/job-details/NTE1/senior-communication-advisor">
                                                    <div class="job_box">
                                                        <h3 >Soft-Skills</h3>
                                                                                                                    <h4>
                                                                 UX andUI,PMP,Presentation,AI,and more   </h4>                                                        </h4>
                                                                                                                

                                                    </div>
                                            
                                            </li>
                                                                                   
                                                                    </ul>
                                                            <div class="text-center" style="display:inline-block; width:100%;">
                                    <a class="viewall_btn" hidden href="https://orange.elevatus.jobs/search-jobs"
                                       style="color:#fff;background-color:rgb(255,108,1)">View All</a>
                                </div>
                                                    </div>
                    </div>
                
                       
                       
                       
                       
                   

                    
                    






                  <div class="col-sm-12 padding0">
                    <div class="container">
                        <div class="gallery_div">
                            <h3>Gallery</h3>
                            <div class="gallery_images text-center owl-carousel owl-theme">
                                                                        <div class="item">
                                                                                        <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfi_keuUDtDFqNVXiUvzdTqTzP0cvceJQolA&usqp=CAU"
                                               class="group4" data-full-image="">
                                                <div style=" padding:44%; width:100%; border-radius:10px; background-image:url('https://i0.wp.com/alghad.com/wp-content/uploads/2019/07/feature-CODING-ACADEMY-Image.jpg?fit=1024%2C768&ssl=1'); background-size:cover; background-repeat:no-repeat; background-position:center;">
                                                    &nbsp;
                                                </div>
                                            </a>
                                        
                                    </div>
                                                                        <div class="item">
                                                                                        <a href="http://intaj.net/wp-content/uploads/2019/07/2G9A1090-300x200.jpg"
                                               class="group4" data-full-image="">
                                                <div style=" padding:44%; width:100%; border-radius:10px; background-image:url('http://intaj.net/wp-content/uploads/2019/07/2G9A1090-300x200.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center;">
                                                    &nbsp;
                                                </div>
                                            </a>
                                        
                                    </div>
                                                                        <div class="item">
                                                                                        <a href="https://pbs.twimg.com/media/EGXgfA1XYAAIr0G.jpg"
                                               class="group4" data-full-image="">
                                                <div style=" padding:44%; width:100%; border-radius:10px; background-image:url('https://pbs.twimg.com/media/EGXgfA1XYAAIr0G.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center;">
                                                    &nbsp;
                                                </div>
                                            </a>
                                        
                                    </div>
                                                                        <div class="item">
                                                                                        <a href="http://anbaalwatan.com/uploads/b2355a84434b79b126276aa241afdeb2.JPG"
                                               class="group4" data-full-image="">
                                                <div style=" padding:44%; width:100%; border-radius:10px; background-image:url('http://anbaalwatan.com/uploads/b2355a84434b79b126276aa241afdeb2.JPG'); background-size:cover; background-repeat:no-repeat; background-position:center;">
                                                    &nbsp;
                                                </div>
                                            </a>
                                        
                                    </div>
                                                                        <div class="item">
                                                                                        <a href="https://d1opaoaaku6e7i.cloudfront.net/portal/image/2020/08/portal-images/origin/15969649931596964993-ed3f2615a001a3eec2559a2b756977dc970f5a6b.jpg"
                                               class="group4" data-full-image="">
                                                <div style=" padding:44%; width:100%; border-radius:10px; background-image:url('https://www.orange.jo/sites/Press/EN/PublishingImages/coding-academy-entrepreneurs.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center;">
                                                    &nbsp;
                                                </div>
                                            </a>
                                        
                                    </div>
                                                                        <div class="item">
                                                                                        <a href="https://pbs.twimg.com/media/EGXgfBSXUAA0i8a.jpg"
                                               class="group4" data-full-image="">
                                                <div style=" padding:44%; width:100%; border-radius:10px; background-image:url('https://pbs.twimg.com/media/EGXgfBSXUAA0i8a.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center;">
                                                    &nbsp;
                                                </div>
                                            </a>
                                        
                                    </div>
                                                                        <div class="item">
                                                                                        <a href="https://www.orange.jo/sites/Press/EN/PublishingImages/coding-academy-entrepreneurs.jpg"
                                               class="group4" data-full-image="">
                                                <div style=" padding:44%; width:100%; border-radius:10px; background-image:url('https://www.orange.jo/sites/Press/EN/PublishingImages/coding-academy-entrepreneurs.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center;">
                                                    &nbsp;
                                                </div>
                                            </a>
                                        
                                    </div>
                                                                        <div class="item">
                                                                                        <a href="https://d1opaoaaku6e7i.cloudfront.net/portal/image/2020/08/portal-images/origin/15969651891596965189-de11168bb35ffc11a11faee6ebead094c89f28e2.jpg"
                                               class="group4" data-full-image="">
                                                <div style=" padding:44%; width:100%; border-radius:10px; background-image:url('https://d1opaoaaku6e7i.cloudfront.net/portal/image/2020/08/portal-images/origin/15969651891596965189-de11168bb35ffc11a11faee6ebead094c89f28e2.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center;">
                                                    &nbsp;
                                                </div>
                                            </a>
                                        
                                    </div>
                                                                        <div class="item">
                                                                                        <a href="https://lh3.googleusercontent.com/proxy/tta_pSnedrZzaU-6pWVgqzUH7KfH7NFylM4Lw-JIjLsmWma59VNFRU96iqyfutcRWwzRR_7-ByldAqeZrnX69DnbafuPcIHXHKSYe9fjXZSmRF3GAdh1WU38O5n_"
                                               class="group4" data-full-image="">
                                                <div style=" padding:44%; width:100%; border-radius:10px; background-image:url('https://lh3.googleusercontent.com/proxy/tta_pSnedrZzaU-6pWVgqzUH7KfH7NFylM4Lw-JIjLsmWma59VNFRU96iqyfutcRWwzRR_7-ByldAqeZrnX69DnbafuPcIHXHKSYe9fjXZSmRF3GAdh1WU38O5n_'); background-size:cover; background-repeat:no-repeat; background-position:center;">
                                                    &nbsp;
                                                </div>
                                            </a>
                                        
                                    </div>
                                                                        <div class="item">
                                                                                        <a href="https://www.orange.jo/sites/Press/EN/PublishingImages/coding-academy-news.jpg"
                                               class="group4" data-full-image="">
                                                <div style=" padding:44%; width:100%; border-radius:10px; background-image:url('https://www.orange.jo/sites/Press/EN/PublishingImages/coding-academy-news.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center;">
                                                    &nbsp;
                                                </div>
                                            </a>
                                        
                                    </div>
                                                                        <div class="item">
                                                                                        <a href="https://www.orange.jo/sites/Press/EN/PublishingImages/coding-academy-photo.jpg"
                                               class="group4" data-full-image="">
                                                <div style=" padding:44%; width:100%; border-radius:10px; background-image:url('https://www.orange.jo/sites/Press/EN/PublishingImages/coding-academy-photo.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center;">
                                                    &nbsp;
                                                </div>
                                            </a>
                                        
                                    </div>

                                    
                                    <div class="item">
                                        <a href="http://anbaalwatan.com/uploads/b2355a84434b79b126276aa241afdeb2.JPG"
class="group4" data-full-image="">
<div style=" padding:44%; width:100%; border-radius:10px; background-image:url('http://anbaalwatan.com/uploads/b2355a84434b79b126276aa241afdeb2.JPG'); background-size:cover; background-repeat:no-repeat; background-position:center;">
    &nbsp;
</div>
</a>

</div>
                                                                        <div class="item">
                                                                                        <a href="http://www.jordantimes.com/sites/default/files/4-ORANGE.jpg"
                                               class="group4" data-full-image="">
                                                <div style=" padding:44%; width:100%; border-radius:10px; background-image:url('http://www.jordantimes.com/sites/default/files/4-ORANGE.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center;">
                                                    &nbsp;
                                                </div>
                                            </a>
                                        
                                    </div>
                                                                </div>
                        </div>
                    </div>
                </div>
            </div>
                                                                                                                    
<style type="text/css">
#content {
    min-height: inherit;
}

.lihide {
    display: none !important;
}

.gallery_images .col-sm-3 {
    width: 24%;
}

@media screen and (max-width: 767px) {
    .gallery_images .col-xs-6 {
        width: 49%;
    }
}
</style>
<script type="text/javascript">
function viewAllTeam() {
    $('.teamviewbtn').hide();
    $('.team_ul li').removeClass('lihide');
}

$(document).ready(function (e) {
    $(".group4").colorbox({rel: 'group4', slideshow: true, maxHeight: 600});
});
</script>
<script>
$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        rewind: true,
        margin: 50,
        nav: false,
        // loop:true,
        dots: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
})
</script>
         

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
<script type="text/javascript" defer="defer" src="https://orange.elevatus.jobs/assets/js/app-util.js?1619208497"></script>
<script type="text/javascript" defer="defer" src="https://orange.elevatus.jobs/assets/js/custom.js"></script>
<script type="text/javascript" defer="defer" src="https://orange.elevatus.jobs/assets/OwlCarousel2/dist/owl.carousel.min.js"></script>
<script type="text/javascript" defer="defer" src="https://orange.elevatus.jobs/assets/js/jquery.colorbox.js"></script><div class="modal fade" id="module_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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




<style type="text/css">
    #content {
        min-height: inherit;
    }

    .lihide {
        display: none !important;
    }

    .gallery_images .col-sm-3 {
        width: 24%;
    }

    @media screen and (max-width: 767px) {
        .gallery_images .col-xs-6 {
            width: 49%;
        }
    }
</style>
<script type="text/javascript">
    function viewAllTeam() {
        $('.teamviewbtn').hide();
        $('.team_ul li').removeClass('lihide');
    }

    $(document).ready(function (e) {
        $(".group4").colorbox({rel: 'group4', slideshow: true, maxHeight: 600});
    });
</script>
<script>
    $(document).ready(function () {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            rewind: true,
            margin: 50,
            nav: false,
            // loop:true,
            dots: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    })
</script>
               
@endsection
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
<script type="text/javascript" defer="defer" src="https://orange.elevatus.jobs/assets/js/app-util.js?1611561312"></script>
<script type="text/javascript" defer="defer" src="https://orange.elevatus.jobs/assets/js/custom.js"></script>
<script type="text/javascript" defer="defer" src="https://orange.elevatus.jobs/assets/OwlCarousel2/dist/owl.carousel.min.js"></script>
<script type="text/javascript" defer="defer" src="https://orange.elevatus.jobs/assets/js/jquery.colorbox.js"></script><div class="modal fade" id="module_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
            background-color: black !important;
        }
      
    </style>


</html>
{{-- <script>
    $(window).load(function (e) {
        if ($(window).width() <= 991) {
            $('body').removeAttr('data-spy');
            $('body').removeAttr('data-target');
            //
        }
    });
</script> --}}

    <script>
        $(document).ready(function() {
    var showChar = 200;
    var ellipsestext = "...";
    var moretext = "Read More";
    var lesstext = "Raad Less";
    $('.more').each(function() {
        var content = $(this).html();
        if (content.length > showChar) {
            var c = content.substr(0, showChar);
            var h = content.substr(showChar - 1, content.length - showChar);
            var html = c + '<span class="moreelipses">' + ellipsestext + '</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
            $(this).html(html);
        }
    });
    $(".morelink").click(function() {
        if ($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
      

    
</script>

      




