<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr"> 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <meta name="author" content="#">
    <title>Welocme to Admin Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/katex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/quill.bubble.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/swiper.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.min.css')}}">

    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/validation/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-ecommerce.min.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/style.css')}}">
    <!-- END: Custom CSS-->
<script>
        var public_path = "{{ asset('') }}";
    </script>
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="navbar-collapse" id="navbar-mobile">
            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
              <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
              </ul>
              <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon bx bx-envelope"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon bx bx-chat"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon bx bx-check-circle"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon bx bx-calendar-alt"></i></a></li>
              </ul>
              <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
                  <div class="bookmark-input search-input">
                    <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                    <input class="form-control input" type="text" placeholder="Explore..." tabindex="0" data-search="template-search">
                    <ul class="search-list"></ul>
                  </div>
                </li>
              </ul>
            </div>
            <ul class="nav navbar-nav float-right">
              
              <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
              <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                <div class="search-input">
                  <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                  <input class="input" type="text" placeholder="Explore..." tabindex="-1" data-search="template-search">
                  <div class="search-input-close"><i class="bx bx-x"></i></div>
                  <ul class="search-list"></ul>
                </div>
              </li>
           <!--    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">7 new Notification</span><span class="text-bold-400 cursor-pointer">Mark all as read</span></div>
                  </li>
                  <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                      <div class="media d-flex align-items-center">
                        <div class="media-left pr-0">
                          <div class="avatar mr-1 m-0"><img src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="39" width="39"></div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">Congratulate Socrates Itumay</span> for work anniversaries</h6><small class="notification-text">Mar 15 12:32pm</small>
                        </div>
                      </div></a>
                    <div class="d-flex justify-content-between read-notification cursor-pointer">
                      <div class="media d-flex align-items-center">
                        <div class="media-left pr-0">
                          <div class="avatar mr-1 m-0"><img src="app-assets/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">New Message</span> received</h6><small class="notification-text">You have 18 unread messages</small>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between cursor-pointer">
                      <div class="media d-flex align-items-center py-0">
                        <div class="media-left pr-0"><img class="mr-1" src="app-assets/images/icon/sketch-mac-icon.png" alt="avatar" height="39" width="39"></div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">Updates Available</span></h6><small class="notification-text">Sketch 50.2 is currently newly added</small>
                        </div>
                        <div class="media-right pl-0">
                          <div class="row border-left text-center">
                            <div class="col-12 px-50 py-75 border-bottom">
                              <h6 class="media-heading text-bold-500 mb-0">Update</h6>
                            </div>
                            <div class="col-12 px-50 py-75">
                              <h6 class="media-heading mb-0">Close</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between cursor-pointer">
                      <div class="media d-flex align-items-center">
                        <div class="media-left pr-0">
                          <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content text-primary font-medium-2">LD</span></div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">New customer</span> is registered</h6><small class="notification-text">1 hrs ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="cursor-pointer">
                      <div class="media d-flex align-items-center justify-content-between">
                        <div class="media-left pr-0">
                          <div class="media-body">
                            <h6 class="media-heading">New Offers</h6>
                          </div>
                        </div>
                        <div class="media-right">
                          <div class="custom-control custom-switch">
                            <input class="custom-control-input" type="checkbox" checked id="notificationSwtich">
                            <label class="custom-control-label" for="notificationSwtich"></label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between cursor-pointer">
                      <div class="media d-flex align-items-center">
                        <div class="media-left pr-0">
                          <div class="avatar bg-danger bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content"><i class="bx bxs-heart text-danger"></i></span></div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">Application</span> has been approved</h6><small class="notification-text">6 hrs ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between read-notification cursor-pointer">
                      <div class="media d-flex align-items-center">
                        <div class="media-left pr-0">
                          <div class="avatar mr-1 m-0"><img src="app-assets/images/portrait/small/avatar-s-4.jpg" alt="avatar" height="39" width="39"></div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">New file</span> has been uploaded</h6><small class="notification-text">4 hrs ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between cursor-pointer">
                      <div class="media d-flex align-items-center">
                        <div class="media-left pr-0">
                          <div class="avatar bg-rgba-danger m-0 mr-1 p-25">
                            <div class="avatar-content"><i class="bx bx-detail text-danger"></i></div>
                          </div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">Finance report</span> has been generated</h6><small class="notification-text">25 hrs ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between cursor-pointer">
                      <div class="media d-flex align-items-center border-0">
                        <div class="media-left pr-0">
                          <div class="avatar mr-1 m-0"><img src="app-assets/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">New customer</span> comment recieved</h6><small class="notification-text">2 days ago</small>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Read all notifications</a></li>
                </ul>
              </li> -->
              <li class="dropdown dropdown-user nav-item">
                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                  <div class="user-nav d-sm-flex d-none">
                    <span class="user-name">{{Auth::user()->name}}</span>
                    <span class="user-status text-muted">Available</span>
                  </div>
                  <span>
                    @if(!empty(Auth::user()->profile_pic))
                               <img src="{{ url('user') }}/{{ Auth::user()->profile_pic }}" class="round" alt="profile image" height="40" width="40"/>
                               @else
                    <img class="round" src="{{ asset('app-assets/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40">
                    @endif
                  </span>
                  </a>
                <div class="dropdown-menu dropdown-menu-right pb-0">
                  <a class="dropdown-item" href="{{route('setting')}}"><i class="bx bx-user mr-50"></i> Edit Profile</a>
                  <a class="dropdown-item" href="#"><i class="bx bx-message mr-50"></i> Support</a>
                  <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();"><i class="bx bx-power-off mr-50"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
   
    @include('layouts.sidemenu')
    <!-- END: Main Menu-->



    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        @yield('content')
        
      </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; All rights reserved</span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
      </p>
    </footer>
    <!-- END: Footer-->

    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">

        {{ csrf_field() }}

    </form>

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{ asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js')}}"></script>
    <script src="{{ asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js')}}"></script>
    <script src="{{ asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <!-- <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script> -->
    <!-- END: Page Vendor JS-->
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/editors/quill/katex.min.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/editors/quill/highlight.min.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/editors/quill/quill.min.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/swiper.min.js')}}"></script>

    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>

    <script src="{{ asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.time.js')}}"></script>

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/scripts/configs/vertical-menu-dark.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/core/app-menu.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/core/app.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/components.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/footer.min.js')}}"></script>
    <!-- END: Theme JS-->
    <script src="{{ asset('app-assets/js/scripts/forms/select/form-select2.min.js')}}"></script>
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/navs/navs.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/validation/form-validation.js')}}"></script>
    <!-- END: Page JS-->
    <script type="text/javascript">
      $(document).ready(function() {
          $(".custom-datatable").DataTable();

          $(".custom-picker").pickadate({
              selectYears:!0,
              selectMonths:!0
            });

          $(".custom-time").pickatime({
              interval:15,
          });

      });

  $(document).ready(function() {
  var t = Quill.import("formats/font");
  t.whitelist = ["sofia", "slabo", "roboto", "inconsolata", "ubuntu"], Quill.register(t, !0);
   new Quill("#full-container .editor", {
    bounds: "#full-container .editor",
    modules: {
      formula: !0,
      syntax: !0,
      toolbar: [
        [{
          font: []
        }, {
          size: []
        }],
        ["bold", "italic", "underline", "strike"],
        [{
          color: []
        }, {
          background: []
        }],
        [{
          script: "super"
        }, {
          script: "sub"
        }],
        [{
          header: "1"
        }, {
          header: "2"
        }, "blockquote", "code-block"],
        [{
          list: "ordered"
        }, {
          list: "bullet"
        }, {
          indent: "-1"
        }, {
          indent: "+1"
        }],
        ["direction", {
          align: []
        }],
        ["link", "image", "video", "formula"],
        ["clean"]
      ]
    },
    theme: "snow"
  })
});
    </script>
 @yield('scripts')
  </body>

</html>
