<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <img src="{{ URL::asset('img/logo.png')}}" style="height: 45px;" title="Skale Solution" alt="Skale Solution">		
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">About us</a></li>
          <li class="dropdown"><a href="#"><span>Our Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Services 1</a></li>
              <li><a href="#">Services 2</a></li>
              <li><a href="#">Services 3</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#services">Blog</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">FAQ</a></li>
          <li><a class="nav-link scrollto" href="#team">Join Our Network</a></li>
           @if(Auth::guest())
                          <li>
                           <a class="nav-link" href="#"  data-toggle="modal" data-target="#modal-register">Register</a>
                            </li>
                          <li>
                              <a class="getstarted " href="#" data-toggle="modal" data-target="#modal-login"><i class="mdi mdi-security-account"></i> Login</a>
                           
                          </li>
                          @else
                          <li class="dropdown">
                            <a class="nav-link getstarted" href="#" id="myacc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-account-outline"></i> Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="myacc">
                               <a class="dropdown-item" href="{{route('userdashboard')}}">My Account</a>
                               <a class="dropdown-item" href="{{url('frontlogout')}}">Logout</a>
                              
                            </div>
                           </li>
                           
                          @endif
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
   <div id="modal-login" class="modal" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h2>Sign in to your account:</h2>
          <span>Welcome to the home!</span>
        </div>
      <form method="post" id="loginform">
          <div class="alert alert-danger logindanger" style="display:none"></div>
          <div class="alert alert-success loginsuccess" style="display:none"></div>
         {{csrf_field()}}
          <div class="modal-body">
            <div class="form-group">
              <input type="text" name="login_email" id="login_email" placeholder="Email:" required="">
              <span class="mdi mdi-at"></span>
            </div>        
            <div class="form-group" id="passlogin">
              <input type="password" id="login_password" name="login_password" placeholder="Password:" required="">
              <span class="mdi mdi-lock"></span>
            </div>
         
            <div class="form-group social-login clearfix">
              <a href="{{url('/redirect')}}" class="col-md-6 fb-login" target="blank"><span class="mdi mdi-facebook"></span>Facebook login</a>
              <a href="{{url('/gredirect')}}" class="col-md-6 google-login" target="blank"><span class="mdi mdi-google-plus"></span>Google login</a>
            </div>
          </div>
          <div class="modal-footer">
            <div class="form-group clearfix">
              <span>Don't have an account? <a href="#" data-toggle="modal" data-target="#modal-register" data-dismiss="modal">Sign Up</a></span>
              <span>Forgot your password? <a href="{{ route('password.request') }}">Restore</a></span>
              <button type="button" id="ajaxloginSubmit" class="btn btn-primary float-right">Login</button>         
            </div>
          </div>    
        </form>
      </div>
    </div>
  </div>
  
  <div id="modal-register" class="modal" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close float-right" data-dismiss="modal">×</button>
          <h2>Create an Account</h2>
          <span>It takes few minutes</span>
        </div>
      <form method="post" id="form">
          <div class="alert alert-danger registerdanger" style="display:none"></div>
          <div class="alert alert-success registersuccess" style="display:none"></div>
         {{csrf_field()}}
          <div class="modal-body">
            <div class="form-group d-inline-flex">
                           <div class="custom-control custom-radio mr-2">
                               <input type="radio" class="custom-control-input" name="usertype" id="usertype-radio1" value="client" checked>
                               <label class="custom-control-label" for="usertype-radio1">Client</label>
                            </div>
                            <div class="custom-control custom-radio mr-2">
                               <input type="radio" class="custom-control-input" name="usertype" id="usertype-radio2" value="provider">
                               <label class="custom-control-label" for="usertype-radio2">Service Provider</label>
                            </div>
                           
                        </div>        
          
                      <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Name:" required="">
                      </div>
                      <div class="form-group">
                        <input type="text" name="mobile" id="mobile" placeholder="Mobile No:" required="">
                      </div>
                      <div class="form-group">
                        <input type="text" name="email" id="email" placeholder="Email:" required="">
                      </div>
                      <div class="form-group">
                          <input type="text" name="zipcode" id="zipcode" placeholder="Postalcode:" required="">         
                        </div>
                        <div class="form-group">
                          <input type="password" name="password" id="password" placeholder="Password:" required="">         
                        </div>

                        <!--  <div class="form-group">
                          <input type="text" name="cpassword" placeholder="Confirm Password:" required="">         
                        </div> -->
                        <div class="form-group social-login clearfix">
              <a href="" class="col-md-6 fb-login" target="blank"><span class="mdi mdi-facebook"></span>Facebook Register</a>
              <a href="" class="col-md-6 google-login" target="blank"><span class="mdi mdi-google-plus"></span> Google Register</a>
            </div>
            <div class="form-group clearfix">         
              <span>Do u have an account? <a href="#" data-toggle="modal" data-target="#modal-login" data-dismiss="modal">Sign In</a></span>          
              <button type="button" id="ajaxSubmit" class="btn btn-primary">Register</button>   
            </div>
          </div>
          <div class="modal-footer">
            
            <div>
              <span class="terms">By clicking Register button you agree with our <br> <a href="#" target="blank">Terms and conditions</a></span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>