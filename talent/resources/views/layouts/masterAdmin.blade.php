<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="{{asset('adminAssets/vendor/bootstrap/css/bootstrap.min.css')}}"
    />
    <link href="{{asset('adminAssets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('adminAssets/libs/css/style.css')}}" />
    <link
      rel="stylesheet"
      href="{{asset('adminAssets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('adminAssets/vendor/charts/chartist-bundle/chartist.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('adminAssets/vendor/charts/morris-bundle/morris.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('adminAssets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}"
    />
    <link rel="stylesheet" href="{{asset('adminAssets/vendor/charts/c3charts/c3.css')}}" />
    <link
      rel="stylesheet"
      href="{{asset('adminAssets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}"
    />
    <link rel="stylesheet" href="{{asset('adminAssets/mycss.css')}}">
    <title>Admin Dashboard</title>
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
      <!-- ============================================================== -->
      <!-- navbar -->
      <!-- ============================================================== -->
      <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
          <a style="color: #FE6701" class="navbar-brand" href="{{asset('/admin')}}">JORDANIAN TALENT</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
              <li class="nav-item">
                <div id="custom-search" class="top-search-bar">
                  <input
                    class="form-control"
                    type="text"
                    placeholder="Search.."
                  />
                </div>
              </li>

              <li class="nav-item dropdown nav-user">
                <a
                  class="nav-link nav-user-img"
                  href="#"
                  id="navbarDropdownMenuLink2"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><img
                    src="{{asset('adminAssets/images/avatar-1.jpg')}}"
                    alt=""
                    class="user-avatar-md rounded-circle"
                /></a>
                <div
                  class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                  aria-labelledby="navbarDropdownMenuLink2"
                >
                  <div class="nav-user-info">
                    <h5 class="mb-0 text-white nav-user-name">John Abraham</h5>
                  </div>
                  <a class="dropdown-item" href="{{asset('logout')}}"
                    ><i class="fas fa-power-off mr-2"></i>Logout</a
                  >
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- ============================================================== -->
      <!-- end navbar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- left sidebar -->
      <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav flex-column">
                <li class="nav-divider">
                  Menu
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{asset('/admin')}}"><i class="fa fa-fw fa-user-circle"></i>Manage Admin </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{asset('/admin/news')}}"><i class="fab fa-fw fa-wpforms"></i>Manage News</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{asset('/admin/event')}}"><i class="fas fa-newspaper"></i>Manage Event</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{asset('/admin/slider')}}"><i class="fas fa-images"></i>Manage Slider
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{asset('/admin/contact')}}"><i class="fas fa-envelope"></i>Manage Contact
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!-- ============================================================================================= -->
      <!-- end left sidebar -->

      <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
          <div class="container-fluid dashboard-content ">
            @yield('content')
          </div>
        </div>

        <!-- ============================================================================================= -->
        <!-- footer -->
        <div class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                Copyright ?? 2018 Concept. All rights reserved. Dashboard by
                <a href="https://colorlib.com/wp/">Colorlib</a>.
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="text-md-right footer-links d-none d-sm-block">
                  <a href="javascript: void(0);">About</a>
                  <a href="javascript: void(0);">Support</a>
                  <a href="javascript: void(0);">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end footer -->
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{asset('adminAssets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{asset('adminAssets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{asset('adminAssets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('adminAssets/libs/js/main-js.js')}}"></script>
    <!-- chart chartist js -->
    <script src="{{asset('adminAssets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{asset('adminAssets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- morris js -->
    <script src="{{asset('adminAssets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendor/charts/morris-bundle/morris.js')}}"></script>
    <!-- chart c3 js -->
    <script src="{{asset('adminAssets/vendor/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <script src="{{asset('adminAssets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
    <script src="{{asset('adminAssets/libs/js/dashboard-ecommerce.js')}}"></script>

</body>
</html>
