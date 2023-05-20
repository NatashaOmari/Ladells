<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- page title -->
      <title>Ladell's Recipes</title>
      
      <!-- Font files -->
      <link href="https://fonts.googleapis.com/css?family=Satisfy:400,400i,700,700i%7CNunito:300,400,700" rel="stylesheet">
      <link href="{{asset('home_ui/fonts/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('home_ui/fonts/fontawesome/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css">
      <!-- Favicons-->
      <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
      <link rel="shortcut icon" href="favicons/favicon.ico" type="image/x-icon">
      <!-- Bootstrap core CSS -->
      <link href="{{asset('home_ui/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- style CSS -->
      <link href="{{asset('home_ui/css/style.css')}}" rel="stylesheet">
      <!-- plugins CSS -->
      <link href="{{asset('home_ui/css/plugins.css')}}" rel="stylesheet">
      <!-- Colors CSS -->
      <link href="{{asset('home_ui/styles/maincolors.css')}}" rel="stylesheet">
      <!-- LayerSlider CSS -->
      <link rel="stylesheet" href="{{asset('home_ui/vendor/layerslider/css/layerslider.css')}}">
      <!-- Prefix free -->
      <script src="{{asset('home_ui/js/prefixfree.min.js')}}"></script>
	</head>
   <!-- ==== body starts ==== -->
   <body id="top">
     <!-- Preloader -->
      
      <!-- ===== Page Content ===== -->
      <div class="container-fluid">
         <!-- ===== Sidebar starts ===== -->
         <div id="sidebar" class="split col-md-2">
            <div class="affix-sidebar col-md-12">
               <div class="sidebar-nav">
                  <div class="navbar navbar-default" role="navigation">
                     <div class="navbar-header">
                        <!-- collapse button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <!-- Logo -->
                        <div class="brand">
                           <a href="index.html">
                           <img src="img/logo.png" alt="" class="img-responsive center-block" >
                           </a>
                        </div>
                        <!-- /brand -->
                     </div>
                     <!-- /navbar-header  -->
                     <div class="navbar-collapse collapse sidebar-navbar-collapse ">
                        <ul class="nav navbar-nav" id="sidenav01">
                           <li><a href="{{route('home.index')}}">Home</a></li>
                           <li><a href="{{route('home.birthday')}}">Birthdays</a></li>
                           
                           <li><a href="{{route('home.wedding')}}">Weddings</a></li>
                           <li><a href="{{route('home.graduation')}}">Graduations</a></li>
                           <li><a href="{{route('home.allevents')}}">All Events</a></li>

                           @if(Auth::check())
                           <li><a href="{{route('home.addcake')}}">Add Recipe</a></li>
                           <li><a href="{{route('admin.index')}}">Admin</a></li>
                           <!--logout functionality-->
                           <li>
                              <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                              <form action="{{route('logout')}}" method="post" id="logout-form" style="display: none;">
                           @csrf
                           </form>
                           </li>
                           @else
                           <li><a href="{{route('login')}}">Login</a></li>
                           <li><a href="{{route('register')}}">Register</a></li>
                           @endif
                        </ul>
                        <!-- navbar-nav -->
                     </div>
                     <!--/.nav-collapse -->
                  </div>
                  <!--/navbar -->
               </div>
               <!--/sidebar-nav -->
               <div class="navbar-info hidden-sm hidden-xs hidden-md">
                  <p class="small-text"><i class="fas fa-map-marker-alt margin-icon"></i>Nairobi, Kenya</p>
                  <p class="small-text"><i class="fas fa-phone margin-icon"></i>+254743116922</p>
                  
                  <!--Social icons -->
                  <div class="social-media ">
                     <a href="#" title=""><i class="fas fa-envelope"></i></a>
                     <a href="#" title=""><i class="fab fa-twitter"></i></a>
                     <a href="#" title=""><i class="fab fa-facebook"></i></a>
                     <a href="#" title=""><i class="fab fa-instagram"></i></a>
                  </div>
               </div>
               <!-- /navbar-info -->
            </div>
            <!-- /affix-sidebar  -->
         </div>
         <!-- ===== / sidebar ends ===== -->

@yield('content')

  <!-- footer -->
  <footer class="footer">
                     <!-- image gradient overlay-->
                     <div class="gradient-overlay top-to-bottom"></div>
                     <div class="inside-wrapper container">
                        <div class="col-md-3 col-md-offset-3">
                           <div class="brand-footer">
                              <a href="index.html">
                              <img src="img/logo.png" alt="" class="img-responsive center-block" >
                              </a>
                           </div>
                        </div>
                        <div class="col-md-4 margin-footer text-center-sm">
                           <!-- Logo -->
                           <p><i class="fas fa-map-marker-alt margin-icon"></i>Nairobi, Kenya</p>
                           <p><i class="fas fa-phone margin-icon"></i>+254743116922</p>
                           
                           <!--Social icons -->
                           <div class="social-media ">
                              <a href="#" title=""><i class="fas fa-envelope"></i></a>
                              <a href="#" title=""><i class="fab fa-twitter"></i></a>
                              <a href="#" title=""><i class="fab fa-facebook"></i></a>
                              <a href="#" title=""><i class="fab fa-instagram"></i></a>
                           </div>
                           <!-- /brand -->
                        </div>
                        
                        <!--/ footer-->
                     </div>
                     <!-- / inside-wrapper -->
                     <!-- Go To Top Link -->
                     <div class="page-scroll">
                        <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
                     </div>
                     <!--/page-scroll-->
                  </footer>
                  <!-- / footer-->
               </div>
               <!-- / content-box -->
            </div>
            <!-- /content-wrapper -->
         </div>
         <!-- /content -->
      </div>
      <!-- /container-fluid -->
      <!-- Bootstrap core & Jquery -->
      <script src="{{asset('home_ui/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('home_ui/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
      <!-- Custom Js -->
      <script src="{{asset('home_ui/js/custom.js')}}"></script>
      <script src="{{asset('home_ui/js/plugins.js')}}"></script>
      <!-- number counter script -->
      <script src="{{asset('home_ui/js/counter.js')}}"></script>
      <!-- GreenSock -->
      <script src="{{asset('home_ui/vendor/layerslider/js/greensock.js')}}"></script>
      <!-- LayerSlider script files -->
      <script src="{{asset('home_ui/vendor/layerslider/js/layerslider.transitions.js')}}"></script>
      <script src="{{asset('home_ui/vendor/layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>
      <script src="{{asset('home_ui/vendor/layerslider/js/layerslider.load.js')}}"></script>
   </body>
</html>