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

  </head>
  <body>
    <section class="body">

      <!-- start: header -->
      <header class="header">
        <div class="logo-container">
          <a href="../" class="logo">
            <img src="{{asset('land-page/images/logo.png')}}" height="35" alt="Porto Admin" />
          </a>
          <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
          </div>
        </div>
      
        <!-- start: search & user box -->
        <div class="header-right">
      
          <form action="pages-search-results.html" class="search nav-form">
            <div class="input-group input-search">
              <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
      
          <span class="separator"></span>
      
          <ul class="notifications">
            <li>
              <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                <i class="fa fa-tasks"></i>
                <span class="badge">3</span>
              </a>
      
              <div class="dropdown-menu notification-menu large">
                <div class="notification-title">
                  <span class="pull-right label label-default">3</span>
                  Tasks
                </div>
      
                <div class="content">
                  <ul>
                    <li>
                      <p class="clearfix mb-xs">
                        <span class="message pull-left">Generating Sales Report</span>
                        <span class="message pull-right text-dark">60%</span>
                      </p>
                      <div class="progress progress-xs light">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                      </div>
                    </li>
      
                    <li>
                      <p class="clearfix mb-xs">
                        <span class="message pull-left">Importing Contacts</span>
                        <span class="message pull-right text-dark">98%</span>
                      </p>
                      <div class="progress progress-xs light">
                        <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                      </div>
                    </li>
      
                    <li>
                      <p class="clearfix mb-xs">
                        <span class="message pull-left">Uploading something big</span>
                        <span class="message pull-right text-dark">33%</span>
                      </p>
                      <div class="progress progress-xs light mb-xs">
                        <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                <i class="fa fa-envelope"></i>
                <span class="badge">4</span>
              </a>
      
              <div class="dropdown-menu notification-menu">
                <div class="notification-title">
                  <span class="pull-right label label-default">230</span>
                  Messages
                </div>
      
                <div class="content">
                  <ul>
                    <li>
                      <a href="#" class="clearfix">
                        <figure class="image">
                          <img src="{{asset('land-page/images/!sample-user.jpg')}}" alt="Joseph Doe Junior" class="img-circle" />
                        </figure>
                        <span class="title">Joseph Doe</span>
                        <span class="message">Lorem ipsum dolor sit.</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="clearfix">
                        <figure class="image">
                          <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                        </figure>
                        <span class="title">Joseph Junior</span>
                        <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="clearfix">
                        <figure class="image">
                          <img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
                        </figure>
                        <span class="title">Joe Junior</span>
                        <span class="message">Lorem ipsum dolor sit.</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="clearfix">
                        <figure class="image">
                          <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                        </figure>
                        <span class="title">Joseph Junior</span>
                        <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                      </a>
                    </li>
                  </ul>
      
                  <hr />
      
                  <div class="text-right">
                    <a href="#" class="view-more">View All</a>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                <i class="fa fa-bell"></i>
                <span class="badge">3</span>
              </a>
      
              <div class="dropdown-menu notification-menu">
                <div class="notification-title">
                  <span class="pull-right label label-default">3</span>
                  Alerts
                </div>
      
                <div class="content">
                  <ul>
                    <li>
                      <a href="#" class="clearfix">
                        <div class="image">
                          <i class="fa fa-thumbs-down bg-danger"></i>
                        </div>
                        <span class="title">Server is Down!</span>
                        <span class="message">Just now</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="clearfix">
                        <div class="image">
                          <i class="fa fa-lock bg-warning"></i>
                        </div>
                        <span class="title">User Locked</span>
                        <span class="message">15 minutes ago</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="clearfix">
                        <div class="image">
                          <i class="fa fa-signal bg-success"></i>
                        </div>
                        <span class="title">Connection Restaured</span>
                        <span class="message">10/10/2014</span>
                      </a>
                    </li>
                  </ul>
      
                  <hr />
      
                  <div class="text-right">
                    <a href="#" class="view-more">View All</a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
      
          <span class="separator"></span>
      
          <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
              <figure class="profile-picture">
                <img src="{{asset('land-page/images/!logged-user.jpg')}}" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
              </figure>
              <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                <span class="name">{{$akun->nama_lengkap}}</span>
                <span class="role">administrator</span>
              </div>
      
              <i class="fa custom-caret"></i>
            </a>
      
            <div class="dropdown-menu">
              <ul class="list-unstyled">
                <li class="divider"></li>
                <li>
                  <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
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
            <h2>User Profile</h2>
          
            <div class="right-wrapper pull-right">
              <ol class="breadcrumbs">
                <li>
                  <a href="index.html">
                    <i class="fa fa-home"></i>
                  </a>
                </li>
                <li><span>Pages</span></li>
                <li><span>User Profile</span></li>
              </ol>
          
              <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
          </header>

          <!-- start: page -->

          <div class="row">
            <div class="col-md-4 col-lg-3">

              <section class="panel">
                <div class="panel-body">
                  <div class="thumb-info mb-md">
                    <img src="{{asset('land-page//images/!logged-user.jpg')}}" class="rounded img-responsive" alt="John Doe">
                    <div class="thumb-info-title">
                      <span class="thumb-info-inner">{{$profile->name}}</span>
                      <span class="thumb-info-type">{{$profile->role}}</span>
                    </div>
                  </div>

                  <div class="widget-toggle-expand mb-md">
                    <div class="widget-header">
                      <h6 id="time"></h6>
                      <div class="widget-toggle">+</div>
                    </div>
                    <div class="widget-content-collapsed">
                      <div class="progress progress-xs light">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                          60%
                        </div>
                      </div>
                    </div>
                    <div class="widget-content-expanded">
                      <ul class="simple-todo-list">
                        <li class="completed">Update Profile Picture</li>
                        <li class="completed">Change Personal Information</li>
                        <li>Update Social Media</li>
                        <li>Follow Someone</li>
                      </ul>
                    </div>
                  </div>

                  <hr class="dotted short">

                  <h6 class="text-muted">About</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis vulputate quam. Interdum et malesuada</p>
                  <div class="clearfix">
                    <a class="text-uppercase text-muted pull-right" href="#">(View All)</a>
                  </div>

                  <hr class="dotted short">

                  <div class="social-icons-list">
                    <a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                    <a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                    <a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                  </div>

                </div>
              </section>


              <section class="panel">
                <header class="panel-heading">
                  <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                  </div>

                  <h2 class="panel-title">
                    <span class="label label-primary label-sm text-normal va-middle mr-sm">198</span>
                    <span class="va-middle">Friends</span>
                  </h2>
                </header>
                <div class="panel-body">
                  <div class="content">
                    <ul class="simple-user-list">
                      <li>
                        <figure class="image rounded">
                          <img src="{{asset('land-page/images/!sample-user.jpg')}}" alt="Joseph Doe Junior" class="img-circle">
                        </figure>
                        <span class="title">Joseph Doe Junior</span>
                        <span class="message truncate">Lorem ipsum dolor sit.</span>
                      </li>
                      <li>
                        <figure class="image rounded">
                          <img src="{{asset('land-page/images/!sample-user.jpg')}}" alt="Joseph Junior" class="img-circle">
                        </figure>
                        <span class="title">Joseph Junior</span>
                        <span class="message truncate">Lorem ipsum dolor sit.</span>
                      </li>
                      <li>
                        <figure class="image rounded">
                          <img src="{{asset('land-page/images/!sample-user.jpg')}}" alt="Joe Junior" class="img-circle">
                        </figure>
                        <span class="title">Joe Junior</span>
                        <span class="message truncate">Lorem ipsum dolor sit.</span>
                      </li>
                      <li>
                        <figure class="image rounded">
                          <img src="{{asset('land-page/images/!sample-user.jpg')}}" alt="Joseph Doe Junior" class="img-circle">
                        </figure>
                        <span class="title">Joseph Doe Junior</span>
                        <span class="message truncate">Lorem ipsum dolor sit.</span>
                      </li>
                    </ul>
                    <hr class="dotted short">
                    <div class="text-right">
                      <a class="text-uppercase text-muted" href="#">(View All)</a>
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <div class="input-group input-search">
                    <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit"><i class="fa fa-search"></i>
                      </button>
                    </span>
                  </div>
                </div>
              </section>

              <section class="panel">
                <header class="panel-heading">
                  <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                  </div>

                  <h2 class="panel-title">Popular Posts</h2>
                </header>
                <div class="panel-body">
                  <ul class="simple-post-list">
                    <li>
                      <div class="post-image">
                        <div class="img-thumbnail">
                          <a href="#">
                            <img src="assets/images/post-thumb-1.jpg" alt="">
                          </a>
                        </div>
                      </div>
                      <div class="post-info">
                        <a href="#">Nullam Vitae Nibh Un Odiosters</a>
                        <div class="post-meta">
                           Jan 10, 2013
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="post-image">
                        <div class="img-thumbnail">
                          <a href="#">
                            <img src="assets/images/post-thumb-2.jpg" alt="">
                          </a>
                        </div>
                      </div>
                      <div class="post-info">
                        <a href="#">Vitae Nibh Un Odiosters</a>
                        <div class="post-meta">
                           Jan 10, 2013
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="post-image">
                        <div class="img-thumbnail">
                          <a href="#">
                            <img src="assets/images/post-thumb-3.jpg" alt="">
                          </a>
                        </div>
                      </div>
                      <div class="post-info">
                        <a href="#">Odiosters Nullam Vitae</a>
                        <div class="post-meta">
                           Jan 10, 2013
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </section>

            </div>
            <div class="col-md-8 col-lg-6">

              <div class="tabs">
                <ul class="nav nav-tabs tabs-primary">
                  <li class="active">
                    <a href="#overview" data-toggle="tab">
                    <i class="fa fa-globe"></i>
                    Pengaturan </a>
                  </li>
                  <li class="">
                    <a href="#edit" data-toggle="tab">
                    <i class="fa fa-lock"></i>
                    Privasi </a>
                  </li>
                 <!--  <li>
                    <a href="#edit" data-toggle="tab">Edit</a>
                  </li> -->
                </ul>
                <div class="tab-content">
                  <div id="overview" class="tab-pane active">
                    <form class="form-horizontal" method="get">
                      <h4 class="mb-xlg">Info Perusahaan</h4>
                      <fieldset>
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="profileFirstName">Nama Lengkap</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" id="profileFirstName" value="{{$akun->nama_lengkap}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="profileLastName">Nomor HP</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" id="profileLastName" value="{{$akun->nohp}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="profileAddress">Address</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" id="profileAddress">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="profileCompany">Company</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" id="profileCompany">
                          </div>
                        </div>
                      </fieldset>
                      
                      <hr class="dotted tall">
                                            </fieldset>
                      <div class="panel-footer">
                        <div class="row">
                          <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                          </div>
                        </div>
                      </div>

                    </form>
                  </div>
                  <div id="edit" class="tab-pane">
                    <h4 class="mb-xlg">Ganti Kata Sansi</h4>
                    <form action="">
                      <fieldset class="mb-xl">
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="profileNewPassword">New Password</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" id="profileNewPassword">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="profileNewPasswordRepeat">Repeat New Password</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" id="profileNewPasswordRepeat">
                          </div>
                        </div>
                      </fieldset>
                      <div class="panel-footer">
                        <div class="row">
                          <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                          </div>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
            

          </div>


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








  <!-- this is LIFE TIME -->

<script type="text/javascript">
  function showTime() {
    var date = new Date(),
        utc = new Date(Date.UTC(
          date.getFullYear(),
          date.getMonth(),
          date.getDate(),
          date.getHours(),
          date.getMinutes(),
          date.getSeconds()
        ));

    document.getElementById('time').innerHTML = utc.toLocaleTimeString();
  }

  setInterval(showTime, 1000);
</script>

    <!-- Vendor -->
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  

  </body>
</html>