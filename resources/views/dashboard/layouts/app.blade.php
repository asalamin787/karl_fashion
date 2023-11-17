<!doctype html>
<html lang="en" data-bs-theme="light">
  
<!-- Mirrored from codervent.com/roksyn/demo/ltr/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 05:49:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karl Fashion Admin Template</title>
    
    <!--plugins-->
    <link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" >
    <link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
    <!-- loader-->
	  <link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet">
	  <script src="{{asset('assets/js/pace.min.js')}}"></script>
    <!--Styles-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.10.3/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}" >

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/dark-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/semi-dark-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/minimal-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/shadow-theme.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     @yield('css_link')
  </head>
  <body>

    <!--start header-->
     <header class="top-header">
      <nav class="navbar navbar-expand justify-content-between">
          <div class="btn-toggle-menu">
            <span class="material-symbols-outlined">menu</span>
          </div>
           <div class="d-lg-block d-none search-bar">
            <button class="btn btn-sm w-100 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
			  <span class="material-symbols-outlined">search</span>Search
			</button>
           </div>
            <ul class="navbar-nav top-right-menu gap-2">
              <li class="nav-item d-lg-none d-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 <a class="nav-link" href="javascript:;"><span class="material-symbols-outlined">
                  search
                  </span></a>
              </li>
              <li class="nav-item dark-mode">
                <a class="nav-link dark-mode-icon" href="javascript:;"><span class="material-symbols-outlined">dark_mode</span></a>
              </li>
              <li class="nav-item dropdown dropdown-app">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><span class="material-symbols-outlined">
                  apps
                  </span></a>
                <div class="dropdown-menu dropdown-menu-end mt-lg-2 p-0">
                    <div class="app-container p-2 my-2">
                      <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">


                      </div><!--end row-->

                    </div>
                </div>
              </li>
              
              <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                  <div class="position-relative">
                    <span class="notify-badge">8</span>
                    <span class="material-symbols-outlined">
                      notifications_none
                      </span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end mt-lg-2">
                  <a href="javascript:;">
                    <div class="msg-header">
                      <p class="msg-header-title">Notifications</p>
                      <p class="msg-header-clear ms-auto">Marks all as read</p>
                    </div>
                  </a>
                  <div class="header-notifications-list">

                  </div>
                  <a href="javascript:;">
                    <div class="text-center msg-footer">View All</div>
                  </a>
                </div>
              </li>
             
               <li class="nav-item">
                 <a class="nav-link" data-bs-toggle="offcanvas" href="#ThemeCustomizer"><span class="material-symbols-outlined">
                  settings
                  </span></a>
               </li>
            </ul>
       </nav>
     </header>
     <!--end header-->


     <!--start sidebar-->
      <aside class="sidebar-wrapper">
          <div class="sidebar-header">
            <div class="logo-icon">
              <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-img" alt="">
            </div>
            <div class="logo-name flex-grow-1">
              <h5 class="mb-0">KARL FASHION</h5>
            </div>
            <div class="sidebar-close ">
              <span class="material-symbols-outlined">close</span>
            </div>
          </div>
          <div class="sidebar-nav" data-simplebar="true">
            
              <!--navigation-->
              <ul class="metismenu" id="menu">
                <li>
                  <a href="">
                    <div class="parent-icon"><span class="material-symbols-outlined">home</span>
                    </div>
                    <div class="menu-title">Dashboard</div>
                  </a>
                </li>
                <li>
                  <a href="{{route('categories.index')}}">
                    <div class="parent-icon"><span class="material-symbols-outlined">category</span>
                    </div>
                    <div class="menu-title">Categorys</div>
                  </a>
                </li>
                
                <li>
                  <a href="{{route('products.index')}}">
                    <div class="parent-icon"><span class="material-symbols-outlined"><i class="fa fa-product-hunt w-4" aria-hidden="true"></i></span>
                    </div>
                    <div class="menu-title">Products</div>
                  </a>
                </li>
                
                <li>
                  <a href="{{route('orders.index')}}">
                    <div class="parent-icon"><span class="material-symbols-outlined"><i class="fa fa-first-order" aria-hidden="true"></i></span>
                    </div>
                    <div class="menu-title">Orders</div>
                  </a>
                </li>
                
                <li>
                  <a href="{{route('coupons.index')}}">
                    <div class="parent-icon"><span class="material-symbols-outlined"><i class="fa fa-codepen" aria-hidden="true"></i></span>
                    </div>
                    <div class="menu-title">Coupons</div>
                  </a>
                </li>

              </ul>
              <!--end navigation-->

              
          </div>
          <div class="sidebar-bottom dropdown dropup-center dropup">
              <div class="dropdown-toggle d-flex align-items-center px-3 gap-3 w-100 h-100" data-bs-toggle="dropdown">
                <div class="user-img">
                   <img src="{{asset('assets/images/avatars/01.png')}}" alt="">
                </div>
                <div class="user-info">
                  <h5 class="mb-0 user-name">Jhon Maxwell</h5>
                  <p class="mb-0 user-designation">UI Engineer</p>
                </div>
              </div>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href=""><span class="material-symbols-outlined me-2">
                  account_circle
                  </span><span>Profile</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  tune
                  </span><span>Settings</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  dashboard
                  </span><span>Dashboard</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  account_balance
                  </span><span>Earnings</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  cloud_download
                  </span><span>Downloads</span></a>
                </li>
                <li>
                  <div class="dropdown-divider mb-0"></div>
                </li>
                {{-- <form action="{{route('logout')}}" method="post">
                  @csrf
                  <li><button type="submit" class="dropdown-item" href=""><span class="material-symbols-outlined me-2">
                    logout
                    </span><span>Logout</span></button>
                  </li>
                </form> --}}
              </ul>
          </div>
     </aside>
     <!--end sidebar-->


    <!--start main content-->
     <main class="page-content">

      @yield('content')

        
     </main>
     <!--end main content-->
 

    <!--start overlay-->
      <div class="overlay btn-toggle-menu"></div>
    <!--end overlay-->


    <!--start theme customization-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="ThemeCustomizer" aria-labelledby="ThemeCustomizerLable">
      <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="ThemeCustomizerLable">Theme Customizer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <h6 class="mb-0">Theme Variation</h6>
        <hr>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
          <label class="form-check-label" for="LightTheme">Light</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2" checked="">
          <label class="form-check-label" for="DarkTheme">Dark</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
          <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
        </div>
        <hr>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
          <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ShadowTheme" value="option4">
          <label class="form-check-label" for="ShadowTheme">Shadow Theme</label>
        </div>
       
      </div>
    </div>
    <!--end theme customization-->


   <!--plugins-->
   @yield('js_link')
   <script src="{{asset('assets/js/jquery.min.js')}}"></script>
   <script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
   <script src="{{asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
   <script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
   <script src="{{asset('assets/plugins/apex/apexcharts.min.js')}}"></script>
   <script src="{{asset('assets/js/index.js')}}"></script>
    <!--BS Scripts-->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
  </body>

<!-- Mirrored from codervent.com/roksyn/demo/ltr/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 05:49:39 GMT -->
</html>