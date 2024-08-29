<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>modern-vivarea</title>
  <link rel="stylesheet" type="text/css" href="/css/home.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/css/bootstrap-select.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="text/css" href="/image/logo.png">
</head>


<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
   
    <div class="banner">
        <div class="header" id="dynamic" >
            <div class="container">
                <div class="manu">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-5 col-5">
                            <div class="logo">
                              <a href="{{url('/')}}"><img src="image/logo.png"></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-8 col-md-2 col-1">
                            <nav class="navbar manu-all navbar-expand-sm ">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                      <a class="nav-link" href="#section1">About</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#section2">Project</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#section3">Price</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#section4">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#section5">Floor Plans</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#section6">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#section7">Location</a>
                                    </li>
                                     <li class="nav-item">
                                      <a class="nav-link" href="#section8">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-xl-3 col-lg-2 col-md-5 col-6 p-0">
                            <div class="Enquire-btn">
                                <a href="tel:{{$admin_phone_no}}"><span class="btn-icon"><i class="fa-solid fa-phone-volume"></i></span></a> <a><span class="btn-text" data-bs-toggle="modal" data-bs-target="#myModal">Enquire Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-video">
            <video muted="" playsinline="" autoplay="" id="video-example" poster="https://www.krahejacorphomes.com/project/wp-content/uploads/2023/03/vid-bg.jpg" loop="" width="100%" height="">
                @foreach($home_banner as $hb)
                    <source src="/uploads/{{$hb->video}}" type="video/mp4">
                @endforeach
            </video>
        </div>
        
    </div>
    <div id="section1" class="ceo">
        <div class="container">
            <div class="slider__1">
                @foreach($home_land as $hl)
                <div class="row ro__1">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="co_image box11">
                            <img src="/uploads/{{$hl->image}}">
                            <div class="overlay-11"></div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12">
                        <div class="co_nheadding ">
                            <h3>{{$hl->title}}</h3>
                            <p>{{$hl->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="row ro__1">
                    <div class="col-lg-5 col-md-5">
                        <div class="co_image box11">
                            <img src="image/about2.png">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="co_nheadding">
                            <h3>From a Historic Address to a Modern Day Landmark</h3>
                            <p>Raheja Modern Vivarea is located in the heart of Mahalakshmi and is connected to every part of this maximum city. It enjoys excellent connectivity by road and rail. It is strategically located near the new business and retail districts of Lower Parel and Worli. Every modern convenience is well within reach, from high-end restaurants and cultural sights to the best shopping and entertainment the city has to offer.</p>
                        </div>
                    </div>
                </div>
                <div class="row ro__1">
                    <div class="col-lg-5 col-md-5">
                        <div class="co_image box11">
                            <img src="image/about3.png">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="co_nheadding">
                            <h3>Some Views can be just as Magical as the Home</h3>
                            <p>Stunning vistas of the beautiful Arabian Sea, the Golf course and the Mahalakshmi Racecourse await you at RAHEJA MODERN VIVAREA.</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div id="section2" class="project">
        <div class="container">
            @foreach($home_feature as $key=>$hf)
            @if($key %2==0)
            <div class="row">
                <div class="col-lg-6 col-md-6 order-22">
                    <div class="project-details ">
                        <h3>{{$hf->title}}</h3>
                        <ul>
                            @foreach($features as $f)
                            @if($f->list_id == $hf->id)
                            <li>{{$f->description}}</li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 order-11">
                    <div class="shap-image">
                        <img src="image/shap1.png">
                    </div>
                    <div class="project-image">
                        <img src="/uploads/{{$hf->image}}">
                    </div>
                    <div class="shape-image">
                        <img src="image/shap2.png">
                    </div>
                </div>
            </div>
            @else

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="shap-image">
                        <img src="image/shap1.png">
                    </div>
                    <div class="project-image">
                        <img src="/uploads/{{$hf->image}}">
                    </div>
                    <div class="shape-image">
                        <img src="image/shap2.png">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="project-details">
                        <h3>{{$hf->title}}</h3>
                        <ul>
                            @foreach($features as $f)
                            @if($f->list_id == $hf->id)
                            <li>{{$f->description}}</li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            @endif
            @endforeach
            
        </div>
    </div>
    <div id="section3" class="Configur">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 order-22">
                    <h3 class="conff">{{$home_config_title}}</h3>
                    <div class="Configur-details table-responsive">
                        <table class="table">
                          <tr>
                            <th>Configuration</th>
                            <th>Area*(SQ.FT)</th>
                            <th>Price</th>
                          </tr>
                          @foreach($home_config as $hc)
                          <tr>
                            <td>{{$hc->configuration}}</td>
                            <td>{{$hc->area}}</td>
                            <td><a><span  data-bs-toggle="modal" data-bs-target="#myModal1">Click for price</span></a></td>
                          </tr>
                          @endforeach
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 order-11">
                    <div class="Configur-image">
                        <img src="/uploads/{{$home_config_image}}">
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div id="section4" class="gallery">
        <div class="container">
            <div class="gallery-title">
                <h3>{{$home_gallery_title}}</h3>
            </div>
            <div class="gallery-slider">
                @foreach($home_gallery as $hg)
                <div class="gallery-image">
                    <img src="/uploads/{{$hg->image}}">
                </div>
                @endforeach
            </div>
        </div>
        <div class="round-shap">
            <img src="image/floater-5.png">
        </div>
    </div>
    <div id="section5" class="recent">
        <div class="recent_main">
            <div class="row">
                <div class="col-lg-9 pa__1">
                    <div class="ba_img">
                        <img src="/uploads/{{$home_plan_image}}">
                    </div>
                </div>
                <div class="col-lg-3 can"></div>
            </div>
        </div>
        <div class="recent_inner">
            <div class="row">
                <div class="col-lg-12 padding-1">
                    <div class="recent_1">
                        <div class="re_head">
                            <h3>{{$home_plan_title}}</h3>
                        </div>
                        <div class="re_disc">
                            <div class="re_slider">
                                @foreach($home_plan as $h)
                                <div class="re_sub" data-bs-toggle="modal" data-bs-target="#myModal">
                                    <a><img src="/uploads/{{$h->image}}"></a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section6" class="overview">
        <div class="container">
            @foreach($home_overview_description as $hod)
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="overview-details">
                        <span>{{$hod->title1}}</span>
                        <h3>{{$hod->title2}}</h3>
                        @foreach($description_list as $key=>$dl)

                            @if($key+1 <=2)

                            <p>{{$dl->description}}</p>

                            @endif
                            @endforeach

                            
                                <div class="question">
                                    <div class="read-more-content" style="">
                                       

                                            @foreach($description_list as $key=>$dl)

                                            @if($key+1 >2)

                                            <p>{{$dl->description}}</p>

                                            @endif

                                            @endforeach

                                        
                                    </div>
                                    <a href="javascript:void(0);" class="read-more" title="Read More">Read More</a>
                                </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="overview-image">
                        <img src="/uploads/{{$hod->image}}">
                        <div class="over-shap">
                            <img src="image/floater-3.png">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div id="section7" class="location">
        <div class="row">
            <div class="col-xxl-8 col-xl-7 col-lg-7 col-md-12 e-loc order-22">
                <div class="location-details">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15091.647621515951!2d72.8242565!3d18.9794976!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf8e21c5ba91%3A0x93e0b020a99482cd!2sRaheja%20Modern%20Vivarea!5e0!3m2!1sen!2sin!4v1685526326653!5m2!1sen!2sin" width="100%" height="620" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="location-address">
                        <h3>{{$contact_title1}}</h3>
                        <ul>
                            @foreach($location as $l)
                            <li>{{$l->name}} : {{$l->distance}}</li>
                            @endforeach
                            <!-- <li>BKC : 11.2 kms</li>
                            <li>Sealink : 1.40 kms</li>
                            <li>Linking Rd. : 10.2 kms</li>
                            <li>Turner Rd : 8.1 kms</li>
                            <li>S. V. Rd. : 19.5 kms</li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-12 e-now order-11">
                <div class="Enquire-Now">
                    <div id="message1"></div>
                    <form class="b-detail" method="POST">
                        <div class="loading-bar"><div class="spinner loading-bar-spinner"><div class="spinner-icon"></div></div></div>
                        {{ csrf_field() }}

                        <h3>{{$contact_title2}}</h3>
                        <div class="row">
                            <div class="col-md-6 check">
                                <input type="text" placeholder="First name" name="first_name" id="c_fname">
                                <span class="text-danger error-text c_first_name_err"></span>
                            </div>
                            <div class="col-md-6 check">
                                <input type="text" placeholder="Last name" name="last_name" id="c_lname">
                                <span class="text-danger error-text c_last_name_err"></span>
                            </div>
                            <div class="col-md-6 check">
                                <input type="email" placeholder="Email address" name="email" id="c_email">
                                <span class="text-danger error-text c_email_err"></span>
                            </div>
                            <div class="col-md-6 check">
                                <input type="number" placeholder="number" name="phone_no" id="c_phone_no">
                                <span class="text-danger error-text c_phone_no_err"></span>
                            </div>
                            <div class="col-md-12 check">
                                <textarea type="text" placeholder="Message" name="message" rows="5" id="c_message"></textarea>
                                <span class="text-danger error-text c_message_err"></span>
                            </div>
                        </div>
                        <p>{!!$contact_description!!}</p>
                        <button id="submit1" class="btn_acele btn_black">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="co_notch">
        <div class="container">
            <div class="main-title">
                <h3>{{$home_amenities_title}}</h3>
            </div>
            <div class="row row1">
                @foreach($home_amenities as $ha)
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="notch">
                        <div class="inner-notch">
                            <div class="notch-icon">
                                <img src="/uploads/{{$ha->image}}">
                            </div>
                            <div class="notch-prg">
                                <h4>{{$ha->title}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div  id="section8" class="footer-area">
        <div class="footer">
            <div class="row">
                <div class="col-lg-2 col-md-12">
                    <div class="footer-logo">
                        <a href="{{url('/')}}"><img src="image/logo 2.png"></a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="footer-details">
                        <p><strong>{{$footer_description_title}}<br></strong> {{$footer_description}}</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="f-address">
                        <p><strong>Address:<BR></strong>{!!$footer_address!!}</p>
                        <p class="call-info"><i class="fa-solid fa-mobile-screen-button"></i><a href="tel:{{$admin_phone_no}}">{{$admin_phone_no}}</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
                <p style="text-align: center;">© 2023 All Rights Reserved by K Raheja Corp. Homes | Powered by <a class="powered-by-text" href="https://insomniacs.in/?utm_source=krahejacorphomes" target="_blank" rel="noopener">insomniacs</a></p>
        </div>
    </div>
    <div class="copy">
        <a class="up-btn show1" href="#"><i class="fas fa-angle-double-up"></i></a>
    </div>
   


    <!------------- Inquiry-modal ------------>
    <div class="modal modal-address" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">QUICK ENQUIRY</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div id="message2"></div>
                    <form class="b-detail" method="POST">
                        {{ csrf_field() }}
                        <div class="loading-bar"><div class="spinner loading-bar-spinner loading-bar-spinner1"><div class="spinner-icon"></div></div></div>
                        <div class="row">
                            <div class="col-md-12 check">
                                <input type="text" placeholder="First Name" name="f_name" id="first_name">
                                <span class="text-danger error-text first_name_err"></span>
                            </div>
                            <div class="col-md-12 check">
                                <input type="text" placeholder="Last Name" name="l_name" id="last_name">
                                <span class="text-danger error-text last_name_err"></span>
                            </div>
                            <div class="col-md-12 check">
                                <input type="email" placeholder="Email address" name="email" id="email">
                                <span class="text-danger error-text email_err"></span>
                            </div>
                            <div class="col-md-12 check">
                                <input type="number" placeholder="Phone Number" name="phone_no" id="phone_no">
                                <span class="text-danger error-text phone_no_err"></span>
                            </div>
                            <div class="col-md-12 check">
                                <textarea type="number" placeholder="Message" name="message" rows="5" id="message"></textarea>
                                <span class="text-danger error-text message_err"></span>
                            </div>
                        </div>
                        <p>By clicking on submit you authorize Modern Vivarea to get in touch with you over a <span>call, SMS, E-mail, Whatsapp</span> or any other communication channel.</p>
                        <button id="submit2" class="btn_acele btn_black">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!------------- Inquiry-modal ------------>
    <div class="modal modal-address" id="myModal1">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">PRICE ENQUIRY</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div id="message3"></div>
                    <form class="b-detail" method="POST">
                        {{ csrf_field() }}
                        <div class="loading-bar"><div class="spinner loading-bar-spinner loading-bar-spinner2"><div class="spinner-icon"></div></div></div>
                        <div class="row">
                            <div class="col-md-12 check">
                                <input type="text" placeholder="name" name="name" id="p_name">
                                <span class="text-danger error-text p_name_err"></span>
                            </div>
                            <div class="col-md-12 check">
                                <input type="email" placeholder="Email address" name="email" id="p_email">
                                <span class="text-danger error-text p_email_err"></span>
                            </div>
                            <div class="col-md-12 check">
                                <input type="number" placeholder="Phone Number" name="phone_no" id="p_phone_no">
                                <span class="text-danger error-text p_phone_no_err"></span>
                            </div>
                        </div>
                        <button id="submit3" class="btn_acele btn_black">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <style type="text/css">
        div#message1 {
            text-align: center;
            font-size: 18px;
            margin: 5px 0px;
            background-color: #19b332;
            color: white;
        }

        div#message2 {
            text-align: center;
            font-size: 18px;
            margin: 5px 0px;
            background-color: #19b332;
            color: white;
        }

        .loading-bar{
            position: relative;
        }

        .loading-bar-spinner.spinner {
            left: 46%;
            top: 190px!important;
            position: absolute;
            z-index: 19 !important;
            width: 40px;
            height: 40px;
        }

        .loading-bar-spinner2.spinner {
            top: 55px!important;
        }

        .loading-bar-spinner.spinner .spinner-icon {
           width: 40px;
           height: 40px;
           border: solid 6px transparent;
           border-top-color: black !important;
           border-left-color: black !important;
           border-radius: 50%;
           animation: loading-bar-spinner 700ms linear infinite;
           display: none;
        }
        @keyframes loading-bar-spinner {
           0% {
            transform: rotate(0deg);
            transform: rotate(0deg);
        }
           100% {
            transform: rotate(360deg);
            transform: rotate(360deg);
          }
        }

    </style>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
     <script type="text/javascript">


        $(document).ready(function() {
        $("#submit1").click(function(e){
            e.preventDefault();

            $(".error-text").empty();
            var _token = $("input[name='_token']").val();  
            var email = $('#c_email').val();
            var first_name = $('#c_fname').val();
            var last_name = $('#c_lname').val();
            var phone_no = $('#c_phone_no').val();
            var message = $('#c_message').val();

            $.ajax({
                url: '/getinquiry',
                type:'POST',
              data: {_token:_token,email:email,first_name:first_name,phone_no:phone_no,last_name:last_name,message:message},
              beforeSend: function(){

                            $('.spinner-icon').show();
                              
                              $('#submit1').prop('disabled', true);

                           },
                        complete: function(){
                            $('#submit1').removeAttr("disabled");
                           $('.spinner-icon').hide();
                         },
                         
                success: function(data) {
                  console.log(data.error)
                    if($.isEmptyObject(data.error)){

                    $('form').each(function() {
                         this.reset();
                       });

                     $("#message1").append("<b>your message submit sucessfully!!!</b>");
                     $('#message1').delay(3000).fadeOut(3000);
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        });
        function printErrorMsg (msg) {
            $.each( msg, function( key, value ) {
            console.log(key);
              $('.c_'+key+'_err').css("display","block");
              $('.c_'+key+'_err').text(value);

              setTimeout(function() { $(".error-text").fadeOut(3000); }, 3000);
            });
        }
    });




        $(document).ready(function() {
        $("#submit2").click(function(e){
            e.preventDefault();

            $(".error-text").empty();
            var _token = $("input[name='_token']").val();  
            var email = $('#email').val();
            var first_name = $('#first_name').val();
            var last_name = $('#last_name').val();
            var phone_no = $('#phone_no').val();
            var message = $('#message').val();

           
            $.ajax({
                url: '/getinquiry',
                type:'POST',
              data: {_token:_token,email:email,first_name:first_name,phone_no:phone_no,last_name:last_name,message:message},
              beforeSend: function(){

                            $('.spinner-icon').show();
                            $('#submit2').prop('disabled', true);
                           },

                        complete: function(){
                            $('#submit2').removeAttr("disabled");
                            $('.spinner-icon').hide();
                         },
                         
                success: function(data) {
                  console.log(data.error)
                    if($.isEmptyObject(data.error)){

                    $('form').each(function() {
                         this.reset();
                       });

                     $("#message2").append("<b>your message submit sucessfully!!!</b>");
                     $('#message2').delay(3000).fadeOut(3000);
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        });
        function printErrorMsg (msg) {
            $.each( msg, function( key, value ) {
            console.log(key);
              $('.'+key+'_err').css("display","block");
              $('.'+key+'_err').text(value);

              setTimeout(function() { $(".error-text").fadeOut(3000); }, 3000);
            });
        }
    });




        $(document).ready(function() {
        $("#submit3").click(function(e){
            e.preventDefault();

            $(".error-text").empty();
            var _token = $("input[name='_token']").val();  
            var email = $('#p_email').val();
            var name = $('#p_name').val();
            var phone_no = $('#p_phone_no').val();

            $.ajax({
                url: '/price_inquiry',
                type:'POST',
              data: {_token:_token,email:email,name:name,phone_no:phone_no},
              beforeSend: function(){
                            $('.spinner-icon').show();
                            $('#submit3').prop('disabled', true);
                           },

                        complete: function(){
                            $('#submit3').removeAttr("disabled");
                            $('.spinner-icon').hide();
                         },
                         
                success: function(data) {
                  console.log(data.error)
                    if($.isEmptyObject(data.error)){

                    $('form').each(function() {
                         this.reset();
                       });

                        $("#message3").append("<b>your message submit sucessfully!!!</b>");
                        $('#message3').delay(3000).fadeOut(3000);
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        });
        function printErrorMsg (msg) {
            $.each( msg, function( key, value ) {
            console.log(key);
              $('.p_'+key+'_err').css("display","block");
              $('.p_'+key+'_err').text(value);

              setTimeout(function() { $(".error-text").fadeOut(3000); }, 3000);
            });
        }
    });


        $('.slider__1').slick({
        autoplay: false,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        focusOnSelect: true,
        prevArrow: '<div class="slide-arrow5 prev-arrow5"><i class="fa fa-long-arrow-left"></i></div>',
        nextArrow: '<div class="slide-arrow5 next-arrow5"><i class="fa fa-long-arrow-right"></i></div>',
        responsive: [
            {
              breakpoint: 1024,
              settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              adaptiveHeight: true,
              },
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
        ],
    });


    $('.re_slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    dots: false ,
    autoplay:true,
    adaptiveHeight: true,
    prevArrow: '<div class="slide-arrow3 prev-arrow3"><i class="fa fa-long-arrow-left"></i></div>',
    nextArrow: '<div class="slide-arrow3 next-arrow3"><i class="fa fa-long-arrow-right"></i></div>',
    responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true,
              },
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],
    });

       $('.gallery-slider').slick({
        autoplay: false,
        autoplaySpeed: 2000,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        focusOnSelect: true,
        prevArrow: '<div class="slide-arrow6 prev-arrow6"><i class="fa fa-long-arrow-left"></i></div>',
        nextArrow: '<div class="slide-arrow6 next-arrow6"><i class="fa fa-long-arrow-right"></i></div>',
        responsive: [
            {
              breakpoint: 1024,
              settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              adaptiveHeight: true,
              },
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
        ],
    });


    $('.read-more').click(function() {
            $(this).prev().slideToggle();
            if (($(this).text()) == "Read More") {
                $(this).text("Read Less");
            } else {
                $(this).text("Read More");
            }
        });


    $(window).scroll(function(){
        if ($(this).scrollTop() > 150) {
            $('#dynamic').addClass('newClass');
        } else {
            $('#dynamic').removeClass('newClass');
        }
    });
     </script>


</body>
</html>