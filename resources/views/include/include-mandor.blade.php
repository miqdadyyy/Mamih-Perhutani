<!doctype html>
<html class="fixed">
  <head>
    <style type="text/css">
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
}

input[type=number] {
    -moz-appearance:textfield; /* Firefox */
}
                     </style>
    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">


    <!-- Vendor CSS -->
    <!-- {{asset('admin/assets/css/style.css')}} -->
    <link rel="stylesheet" href="{{asset('land-page/vendor/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('land-page/vendor/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('land-page/vendor/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('land-page/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('land-page/stylesheets/theme.css')}}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('land-page/stylesheets/skins/default.css')}}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('land-page/stylesheets/theme-custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('land-page/vendor/modernizr/modernizr.js')}}"></script>




    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('land-page/vendor/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('land-page/vendor/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('land-page/vendor/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('land-page/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{asset('land-page/vendor/isotope/jquery.isotope.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('land-page/stylesheets/theme.css')}}" />
    <link rel="stylesheet" href="assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('land-page/stylesheets/skins/default.css')}}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('land-page/stylesheets/theme-custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('land-page/vendor/modernizr/modernizr.js')}}"></script>

  </head>
  <body>
    <section class="body">

      <!-- start: header -->
      <header class="header">
        <div class="logo-container">
         <!--  <a href="../" class="logo">
            <img src="{{asset('land-page/images/logo.png')}}" height="35" alt="Porto Admin" />
          </a> -->
          <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
          </div>
        </div>
      
        <!-- start: search & user box -->
        <div class="header-right">
      
          
      
          <span class="separator"></span>
      
          
      
          <span class="separator"></span>
      
          <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
              <figure class="profile-picture">
                <img src="{{asset('land-page/images/!logged-user.jpg')}}" alt="Joseph Doe" class="img-circle" data-lock-picture="{{asset('land-page/images/!logged-user.jpg')}}" />
              </figure>
              <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                <span class="name">{{Auth::user()->name}}</span>
                <span class="role">{{Auth::user()->role}}</span>
              </div>
      
              <i class="fa custom-caret"></i>
            </a>
      
            <div class="dropdown-menu">
              <ul class="list-unstyled">
                <li class="divider"></li>
                <li>
                  <a role="menuitem" tabindex="-1" href="/profile"><i class="fa fa-user"></i> My Profile</a>
                </li>
                <li>
                  <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
                </li>
                <li>
                  <a role="menuitem" tabindex="-1" href="/logout"><i class="fa fa-power-off"></i> Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end: search & user box -->
      </header>
      <!-- end: header -->

      <div class="inner-wrapper">
        <!-- start: sidebar -->
        
        <!-- end: sidebar -->

        <section role="main" class="content-body">
          <header class="page-header">
            <h2>Tampilan Awal</h2>
          
            
          </header>

          <!-- start: page -->
            
            
           
            @yield('content-page')
           
            
                     <!-- end: page -->
        </section>
      </div>

      <aside id="sidebar-right" class="sidebar-right">
        <div class="nano">
          <div class="nano-content">
            <a href="#" class="mobile-close visible-xs">
              Collapse <i class="fa fa-chevron-right"></i>
            </a>
      
            <div class="sidebar-right-wrapper">
      
              <div class="sidebar-widget widget-calendar">
                <h6>Upcoming Tasks</h6>
                <div data-plugin-datepicker data-plugin-skin="dark" ></div>
      
                <ul>
                  <li>
                    <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                    <span>Company Meeting</span>
                  </li>
                </ul>
              </div>
      
              <div class="sidebar-widget widget-friends">
                <h6>Friends</h6>
                <ul>
                  <li class="status-online">
                    <figure class="profile-picture">
                      <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                    </figure>
                    <div class="profile-info">
                      <span class="name">Joseph Doe Junior</span>
                      <span class="title">Hey, how are you?</span>
                    </div>
                  </li>
                  <li class="status-online">
                    <figure class="profile-picture">
                      <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                    </figure>
                    <div class="profile-info">
                      <span class="name">Joseph Doe Junior</span>
                      <span class="title">Hey, how are you?</span>
                    </div>
                  </li>
                  <li class="status-offline">
                    <figure class="profile-picture">
                      <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                    </figure>
                    <div class="profile-info">
                      <span class="name">Joseph Doe Junior</span>
                      <span class="title">Hey, how are you?</span>
                    </div>
                  </li>
                  <li class="status-offline">
                    <figure class="profile-picture">
                      <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                    </figure>
                    <div class="profile-info">
                      <span class="name">Joseph Doe Junior</span>
                      <span class="title">Hey, how are you?</span>
                    </div>
                  </li>
                </ul>
              </div>
      
            </div>
          </div>
        </div>
      </aside>
    </section>

    <!-- Vendor -->
    @yield('script')

    <script src="{{asset('land-page/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('land-page/vendor/nanoscroller/nanoscroller.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('land-page/vendor/magnific-popup/magnific-popup.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
    
    <!-- Specific Page Vendor -->
    <script src="{{asset('land-page/vendor/jquery-validation/jquery.validate.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
    <script src="{{asset('land-page/vendor/pnotify/pnotify.custom.js')}}"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('land-page/javascripts/theme.js')}}"></script>
    
    <!-- Theme Custom -->
    <script src="{{asset('land-page/javascripts/theme.custom.js')}}"></script>
    
    <!-- Theme Initialization Files -->
    <script src="{{asset('land-page/javascripts/theme.init.js')}}"></script>


    <!-- Examples -->
    <script src="{{asset('land-page/javascripts/forms/examples.wizard.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('land-page/vendor/nanoscroller/nanoscroller.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('land-page/vendor/magnific-popup/magnific-popup.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('land-page/javascripts/theme.js')}}"></script>
    
    <!-- Theme Custom -->
    <script src="{{asset('land-page/javascripts/theme.custom.js')}}"></script>
    
    <!-- Theme Initialization Files -->
    <script src="{{asset('land-page/javascripts/theme.init.js')}}"></script>

    <script src="{{asset('land-page/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('land-page/vendor/nanoscroller/nanoscroller.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('land-page/vendor/magnific-popup/magnific-popup.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('land-page/javascripts/theme.js')}}"></script>
    
    <!-- Theme Custom -->
    <script src="{{asset('land-page/javascripts/theme.custom.js')}}"></script>
    
    <!-- Theme Initialization Files -->
    <script src="{{asset('land-page/javascripts/theme.init.js')}}"></script>



<script src="{{asset('land-page/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('land-page/vendor/nanoscroller/nanoscroller.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('land-page/vendor/magnific-popup/magnific-popup.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
    
    <!-- Specific Page Vendor -->
    <script src="{{asset('land-page/vendor/isotope/jquery.isotope.js')}}"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('land-page/javascripts/theme.js')}}"></script>
    
    <!-- Theme Custom -->
    <script src="{{asset('land-page/javascripts/theme.custom.js')}}"></script>
    
    <!-- Theme Initialization Files -->
    <script src="{{asset('land-page/javascripts/theme.init.js')}}"></script>


    <!-- Examples -->
<script src="{{asset('land-page/javascripts/pages/examples.mediagallery.js')}}"></script>

<script src="{{asset('land-page/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('land-page/vendor/nanoscroller/nanoscroller.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('land-page/vendor/magnific-popup/magnific-popup.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
    
    <!-- Specific Page Vendor -->
    <script src="{{asset('land-page/vendor/isotope/jquery.isotope.js')}}"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('land-page/javascripts/theme.js')}}"></script>
    
    <!-- Theme Custom -->
    <script src="{{asset('land-page/javascripts/theme.custom.js')}}"></script>
    
    <!-- Theme Initialization Files -->
    <script src="{{asset('land-page/javascripts/theme.init.js')}}"></script>


    <!-- Examples -->
    <script src="{{asset('land-page/javascripts/pages/examples.mediagallery.js')}}" /></script>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </script>

  </body>
</html>