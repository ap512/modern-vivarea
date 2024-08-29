<html>
<head>
  <title>Admin</title>
  <link rel="icon" href="/image/logo.png">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="/css/admin_home.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


      
</head>
<style type="text/css">
   .logo h1 {
   font-size: 35px;
   font-weight: 800;
   margin: 0;
   text-transform: uppercase;
}
.logo h1 a{
   color:#df453e;
}
.logo h1 a span{
   color:#1b3e41;
}
.logo h1 a:hover{
   text-decoration: none;
}

.text{

   font-weight: 400;
}
.text th{

   text-align: left;

   border: none !important;
}
.error_mes{

   color: red;
}
</style>
<body>  
   <header class="page-header">
      <nav class="main-menu">
         <!-- <div class="logo">
               <h1><a href="{{url('admin/home')}}">rent<span>al</span></a></h1>
         </div> -->
         <a href="{{url('/admin/home')}}"class="logo"><img src="/image/logo.png" alt="img"></a>
         <ul class="menu main_drop">
            <li><a href="{{url('admin/home')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span> </a>
            </li>

            <!-- <li><a href="{{url('/admin/inquiry')}}"><i class="fa-regular fa-comments"></i><span>Inquiry</span> </a>
            </li> -->

             <li><a href="{{url('admin/home_banner')}}"><i class="fas fa-file-alt"></i><span>Home banner</span></a>
               <!-- <ul class="drp-menu"> -->
                  <!-- <li><a href="{{url('admin/home_banner')}}">Home page banner</a></li> -->
                  <!-- <li><a href="{{url('admin/home_land')}}">Home Land</a></li> -->
                  <!-- <li><a href="{{url('admin/home_feature')}}">Home Feature</a></li> -->
                  <!-- <li><a href="{{url('admin/home_config')}}">Home Configuration</a></li> -->
                  <!-- <li><a href="{{url('admin/home_gallery')}}">Home Gallery</a></li> -->
                  <!-- <li><a href="{{url('admin/home_plan')}}">Home Plan</a></li>
                  <li><a href="{{url('admin/home_overview')}}">Home Overview</a></li>
                  <li><a href="{{url('admin/home_amenities')}}">Home Amenities</a></li>
                  <li><a href="{{url('admin/home_contact')}}">Home Contact</a></li> -->
               <!-- </ul> -->
            </li>

             <li><a href="{{url('admin/home_land')}}"><i class="fas fa-home"></i> <span>Home Land</span></a>
            </li>


            <li><a href="{{url('admin/home_feature')}}"><i class="fa-solid fa-list-check"></i> <span>Project Feature</span></a>
            </li>


            <li><a href="{{url('admin/home_config')}}"><i class="fa-solid fa-house-circle-check"></i> <span>Configuration</span></a>
            </li>

             <li><a href="{{url('admin/home_gallery')}}"><i class="fa-sharp fa-solid fa-images"></i> <span>Gallery</span></a>
            </li>

            <li><a href="{{url('admin/home_plan')}}"><i class="fa-sharp fa-solid fa-layer-group"></i> <span>Plan</span></a>
            </li>

            <li><a href="{{url('admin/home_overview')}}"><i class="fas fa-chalkboard-teacher"></i> <span>Overview</span></a>
            </li>

            <li><a href="{{url('admin/home_amenities')}}"><i class="fa-solid fa-universal-access"></i> <span>Amenities</span></a>
            </li>

            <li><a href="{{url('admin/home_contact')}}"><i class="fas fa-phone-alt"></i> <span>Contact</span></a>
            </li> 
            <li><a href="#"><i class="fas fa-table"></i><span>Header-Footer</span> <i class="fa-solid fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('/admin/footer_description')}}">Footer Description</a></li>
                  <li><a href="{{url('/admin/footer_address')}}">Footer Address</a></li>
               </ul>
            </li>
         </ul>
      </nav>
   </header>
   <section class="mobile_manu">
        <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-6">
                 <div class="mobile_logo">
                   <a href="{{url('/admin/home')}}"><img src="/image/logo.png"></a>
                 </div>
               </div>
               <div class="col-lg-6 col-md-6 col-6">
                  <div class="admin-profile">
                  <div class="login">
                    <div class="dropdown1">
                      <button id="myBtn1">
                        <i class="dropbtn1 fas fa-user"></i>
                     </button>
                        <div id="myDropdown1" class="dropdown-content1">
                          <a href="{{url('admin/edit_profile')}}">Edit Profile</a>
                          <a href="{{url('admin/changepassword')}}">Change Password</a>
                          <a href="{{url('admin/logout')}}"><i class="fas fa-lock"></i>Logout</a>
                        </div>
                    </div>
                  </div>
                  <div class="mobile-menu">
                     <div id="mySidepanel" class="sidepanel">
                        <div class="m_menu main-menu">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>
                           <ul class="menu main_drop">
                                 <li><a href="{{url('/admin/home')}}"><span>Dashboard</span> </a>
                                 </li>
                                 
                                 <li><a href="{{url('admin/home_banner')}}"><span>Home banner</span></a>
                                 </li>

                                 <li><a href="{{url('admin/home_land')}}"><span>Home Land</span></a>
                                 </li>

                                 <li><a href="{{url('admin/home_feature')}}"><span>Project Feature</span></a>
                                 </li>


                                 <li><a href="{{url('admin/home_config')}}"><span>Configuration</span></a>
                                 </li>


                                 <li><a href="{{url('admin/home_gallery')}}"><span>Gallery</span></a>
                                 </li>



                                 <li><a href="{{url('admin/home_plan')}}"> <span>Plan</span></a>
                                 </li>


                                 <li><a href="{{url('admin/home_overview')}}"><span>Overview</span></a>
                                 </li>


                                 <li><a href="{{url('admin/home_amenities')}}"><span>Amenities</span></a>
                                 </li>


                                 <li><a href="#"><span>Header-Footer</span> <i class="fa-solid fa-chevron-down"></i></a>
                                    <ul class="drp-menu">
                                       <li><a href="{{url('/admin/footer_description')}}">Footer Description</a></li>
                                       <li><a href="{{url('/admin/footer_address')}}">Footer Address</a></li>
                                    </ul>
                                 </li>

                           </ul>                
                        </div>
                     </div>
                     <button class="openbtn" onclick="openNav()"><i class="fas fa-bars"></i></button> 
                  </div>
                      </div>
                   </div>
              </div>
          </div>
        </div>
   </section>
   <section class="page-content">
      <div class="search-and-user">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-6">
                  <ul class="admin-menu">
                    <li>
                       <div class="switch">
                         <label for="mode">
                         </label>
                       </div>
                       <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
                         <i class="fas fa-bars"></i>
                         <span>Collapse</span>
                       </button>
                    </li>
                 </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
                 <div class="admin-profile">
                     <div class="login">
                       <div class="dropdown1">
                         <button id="myBtn1">
                           <span class="greeting">My Account</span>
                           <i class="dropbtn1 fas fa-user"></i>
                        </button>
                           <div id="myDropdown1" class="dropdown-content1">
                             <a href="{{url('admin/edit_profile')}}">Edit Profile</a>
                             <a href="{{url('admin/changepassword')}}">Change Password</a>
                            <a href="{{url('admin/logout')}}"><i class="fas fa-lock"></i>Logout</a>
                           </div>
                       </div>
                     </div>
                 </div>
            </div>
         </div>
      </div>
      <div>

             @if ($message = Session::get('error'))
            <div  id="hideDiv" class="alert alert-success alert-block" >
                <!--     <input type="text" class="close" data-dismiss="alert"></input> -->
                <strong style="padding-top : 5px !important; display: inline-block;">{{ $message }}</strong>
             </div>
           @endif
         @yield('content')
      </div>



   </section>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <script type="text/javascript">

    $(function() {
                 setTimeout(function() { $("#hideDiv").fadeOut(3000); }, 3000)

             });


      $('.main-menu>ul>li>a, .main-menu ul.drp-menu>li>a').on('click', function(e) {
      var element = $(this).parent('li');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('li').removeClass('open');
        element.find('ul').slideUp(500,"swing");
      }
      else {
        element.addClass('open');
        element.children('ul').slideDown(800,"swing");
        element.siblings('li').children('ul').slideUp(800,"swing");
        element.siblings('li').removeClass('open');
        element.siblings('li').find('li').removeClass('open');
        element.siblings('li').find('ul').slideUp(1000,"swing");
      }
      });

        $('.dropdown1').click(function(){
        $('.dropdown-content1').toggle();
        });

      function openNav() {
            document.getElementById("mySidepanel").style.width = "100%";
        }
        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }

    </script>
   <script type="text/javascript">
      const html = document.documentElement;
      const body = document.body;
      const menuLinks = document.querySelectorAll(".admin-menu a");
      const collapseBtn = document.querySelector(".admin-menu .collapse-btn");
      const toggleMobileMenu = document.querySelector(".toggle-mob-menu");
      const switchInput = document.querySelector(".switch input");
      const switchLabel = document.querySelector(".switch label");
      const switchLabelText = switchLabel.querySelector("span:last-child");
      const collapsedClass = "collapsed";
      const lightModeClass = "light-mode";

      collapseBtn.addEventListener("click", function () {
        body.classList.toggle(collapsedClass);
        this.getAttribute("aria-expanded") == "true"
          ? this.setAttribute("aria-expanded", "false")
          : this.setAttribute("aria-expanded", "true");
        this.getAttribute("aria-label") == "collapse menu"
          ? this.setAttribute("aria-label", "expand menu")
          : this.setAttribute("aria-label", "collapse menu");
      });

      toggleMobileMenu.addEventListener("click", function () {
        body.classList.toggle("mob-menu-opened");
        this.getAttribute("aria-expanded") == "true"
          ? this.setAttribute("aria-expanded", "false")
          : this.setAttribute("aria-expanded", "true");
        this.getAttribute("aria-label") == "open menu"
          ? this.setAttribute("aria-label", "close menu")
          : this.setAttribute("aria-label", "open menu");
      });

      for (const link of menuLinks) {
        link.addEventListener("mouseenter", function () {
          if (
            body.classList.contains(collapsedClass) &&
            window.matchMedia("(min-width: 768px)").matches
          ) {
            const tooltip = this.querySelector("span").textContent;
            this.setAttribute("title", tooltip);
          } else {
            this.removeAttribute("title");
          }
        });
      }

      if (localStorage.getItem("dark-mode") === "false") {
        html.classList.add(lightModeClass);
        switchInput.checked = false;
        switchLabelText.textContent = "Light";
      }

      switchInput.addEventListener("input", function () {
        html.classList.toggle(lightModeClass);
        if (html.classList.contains(lightModeClass)) {
          switchLabelText.textContent = "Light";
          localStorage.setItem("dark-mode", "false");
        } else {
          switchLabelText.textContent = "Dark";
          localStorage.setItem("dark-mode", "true");
        }
      });
    </script>
    
    
</body>
</html>

 