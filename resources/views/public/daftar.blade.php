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







<!doctype html>
<html class="fixed">
  <head>

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
  <body style="
   
  background: #9053c7;
  background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0);
  background: -o-linear-gradient(-135deg, #c850c0, #4158d0);
  background: -moz-linear-gradient(-135deg, #c850c0, #4158d0);
  background: linear-gradient(-135deg, #c850c0, #4158d0);
  ">
    
    <!-- start: page -->
    <br>
<div class="row">
              <div class="col-xs-10 col-md-offset-1">
                <section class="panel form-wizard" id="w4">
                  <header class="panel-heading">
                    
                    <h2 class="panel-title">Pendaftaran Mandor</h2>
                  </header>
                  <div class="panel-body">
                    <div class="wizard-progress wizard-progress-lg">
                      <div class="steps-progress">
                        <div class="progress-indicator"></div>
                      </div>
                      <ul class="wizard-steps">
                        <li class="active">
                          <a href="#w4-account" data-toggle="tab"><span>1</span>Profil</a>
                        </li>
                        <li>
                          <a href="#w4-profile" data-toggle="tab"><span>2</span>Data Diri</a>
                        </li>
                        <li>
                          <a href="#w4-billing" data-toggle="tab"><span>3</span>Privasi</a>
                        </li>
                        <li>
                          <a href="#w4-confirm" data-toggle="tab"><span>4</span>Konfirmasi</a>
                        </li>
                      </ul>
                    </div>
            
                       <form method="POST" action="{{url('/send/registration')}}" class="form-horizontal" novalidate="novalidate" id="myform">
          {{csrf_field()}}
                      <div class="tab-content">
                        <div id="w4-account" class="tab-pane active">
                          <div class="form-group">
                            <label class="col-sm-4 control-label" for="w4-username"> Username</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" name="username" id="w4-username" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-4 control-label" for="w4-username"> Email</label>
                            <div class="col-sm-4">
                              <input type="email" class="form-control" name="email" id="w4-username" required>
                            </div>
                          </div>
                          
                         <!--  <div class="form-group">
                            <label class="col-sm-3 control-label" for="w4-password">Password</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" name="password" id="w4-password" required minlength="6">
                            </div>
                          </div> -->
                        </div>
                        <div id="w4-profile" class="tab-pane">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" for="w4-first-name">Nama Depan</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" name="nama_depan" id="w4-first-name" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-5 control-label" for="w4-last-name">Nama Belakang</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" name="nama_belakang" id="w4-last-name" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-5 control-label" for="w4-last-name">Nomor HP</label>
                            <div class="col-sm-2">
                              <input type="number" class="form-control" name="nohp" id="w4-last-name" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-5 control-label" for="w4-last-name">Alamat</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" name="alamat" id="w4-last-name" required>
                            </div>
                          </div>
                          
                         

                        </div>

                        <!-- no 2 -->
                        <div id="w4-billing" class="tab-pane">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" for="w4-first-name">Password</label>
                            <div class="col-sm-2">
                              <input type="password" class="form-control" name="password" id="w4-first-name" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-5 control-label" for="w4-first-name">Ulangin Password</label>
                            <div class="col-sm-2">
                              <input type="password" class="form-control" name="password" id="w4-first-name" required>
                            </div>
                          </div>
                          
                        </div>

                        <!-- no 4 -->
                        <div id="w4-confirm" class="tab-pane">
                          <div class="form-group">
                            <label class="col-sm-3 control-label" for="w4-email"></label>
                            <div class="col-sm-6">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio porro dolor soluta suscipit explicabo illum repellat inventore quae placeat odit laudantium praesentium, nam earum expedita, cum facilis eaque. Recusandae, possimus!</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio porro dolor soluta suscipit explicabo illum repellat inventore quae placeat odit laudantium praesentium, nam earum expedita, cum facilis eaque. Recusandae, possimus!</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                              <div class="checkbox-custom">
                                <input type="checkbox" name="terms" id="w4-terms" required>
                                <label for="w4-terms">Saya membaca persetujuan diatas</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                  </div>
                  <div class="panel-footer">
                    <ul class="pager">
                      <li class="previous disabled">
                        <a><i class="fa fa-angle-left"></i> Previous</a>
                      </li>
                      <li class="finish hidden pull-right">
                        <a onclick="document.getElementById('myform').submit();">click here</a>    
                      </li>
                    
                      <li class="next">
                        <a>Next <i class="fa fa-angle-right"></i></a>
                      </li>
                    </ul>
                  </div>
                </section>
                
              </form>
              </div>
            </div>

   
    
    <!-- end: page -->

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  </body>
</html>
















