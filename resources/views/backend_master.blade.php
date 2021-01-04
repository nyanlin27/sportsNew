<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('backend_asset/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend_asset/vendors/base/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('backend_asset/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('backend_asset/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('backend_asset/images/favicon.png') }}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('backend_asset/images/logo.svg') }}" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('backend_asset/images/logo-mini.svg') }}" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="{{ asset('backend_asset/images/faces/face4.jpg') }}" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="{{ asset('backend_asset/images/faces/face2.jpg') }}" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="{{ asset('backend_asset/images/faces/face3.jpg') }}" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset('backend_asset/images/faces/face5.jpg') }}" alt="profile"/>
              <span class="nav-profile-name">Louis Barnett</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" >
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboardpage') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false" aria-controls="post">
                <i class="mdi mdi-newspaper menu-icon"></i>
                <span class="menu-title">Post</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="post">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('posts.create') }}">
                    Create Post</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('posts.index') }}">Post List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#league" aria-expanded="false" aria-controls="league">
                  <i class="mdi mdi-circle-outline menu-icon"></i>
                  <span class="menu-title">Leagues</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="league">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('leagues.create') }}">Create League</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('leagues.index') }}">View List</a></li>
                  </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#team" aria-expanded="false" aria-controls="team">
                    <i class="mdi mdi-flag menu-icon"></i>
                  <span class="menu-title">Team</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="team">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href={{ route('teams.create') }}>
                      Create Team</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('teams.index') }}">Team Table</a></li>
                  </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#match" aria-expanded="false" aria-controls="match">
                    <i class="mdi mdi-soccer menu-icon"></i>
                  <span class="menu-title">Match</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="match">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('matches.create') }}">
                      Create Match</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('matches.index') }}">Match Table</a></li>
                  </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#result" aria-expanded="false" aria-controls="result">
                    <i class="mdi mdi-menu menu-icon"></i>
                  <span class="menu-title">result</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="result">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('results.create') }}">
                      Create Result</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('results.index') }}">Result Table</a></li>
                  </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#table" aria-expanded="false" aria-controls="table">
                    <i class="mdi mdi-poll menu-icon"></i>
                  <span class="menu-title">Table</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="table">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href=""> Seri A</a></li>
                    {{-- @foreach($leagues as $league)
                        <li><a href="">{{ $league->name }}</a></li>
                    @endforeach --}}
                  </ul>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{ route('items.index') }}">
                  <i class="mdi mdi-google-wallet menu-icon"></i>
                  <span class="menu-title">Items</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="mdi mdi-details menu-icon"></i>
                  <span class="menu-title">Order</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="mdi mdi-information menu-icon"></i>
                  <span class="menu-title">Order Details</span>
                </a>
              </li>

          </ul>

        </nav>
        <div class="main-panel">
            @yield('content')
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                  <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="#" target="_blank">Sports News</a>. MIC-CODERS</span>
                  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
                </div>
              </footer>
        </div>

    </div>

<!-- container-scroller -->




  <!-- plugins:js -->
  <script src="{{ asset('backend_asset/vendors/base/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('backend_asset/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('backend_asset/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('backend_asset/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('backend_asset/js/off-canvas.js') }}"></script>
  <script src="{{ asset('backend_asset/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('backend_asset/js/template.js') }}"></script>
<!-- Custom js for this page-->
<script src="{{ asset('backend_asset/js/file-upload.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('backend_asset/js/dashboard.js') }}"></script>
  <script src="{{ asset('backend_asset/js/data-table.js') }}"></script>
  <script src="{{ asset('backend_asset/js/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('backend_asset/js/dataTables.bootstrap4.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>

