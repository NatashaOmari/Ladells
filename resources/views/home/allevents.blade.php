<x-home-master>
    @section('content')
    <!-- ===== content starts  ===== -->
    <div id="content" class="col-md-10 split">
            <!--content-wrapper  -->
            <div class="content-wrapper">
               <!--divider-top  -->
               <div class="divider-top">
                  <!--header-info  -->
                  <div class="header-info col-md-12">
                     <!--inside-wrapper  -->
                     <div class="inside-wrapper container">
                        <!-- Heading -->
                        <h1>Gallery</h1>
                        
                     </div>
                     <!--/inside-wrapper  -->
                  </div>
                  <!--/header-info  -->
                  <!-- image gradient overlay-->
                  <div class="gradient-overlay"></div>
               </div>
               <!-- /divider-top -->
               <div class="content-box container">
                  <!-- ===== section starts  ===== -->
                  <section class="inside-page">
                     <div class="inside-wrapper container">
                        <div class="row">
                            <div class="col-md-5">
                               <!-- image -->
                               <img class="img-responsive img-rounded center-block" src="home_ui/img/about/about1.jpg" alt="">
                            </div>
                            <!-- /col-md-->
                            <div class="col-md-7 res-margin">
                               <h2>Quality cakes and pastries</h2>
                               <p><strong>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie.</strong></p>
                               <p> In aliquet magna nec lobortis maximus.  Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules, Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.                        </p>
                               <!-- list-->
                               <ul class="custom pl-0">
                                  <li>Ipuset phas ellus ac sodales Lorem ipsum dolor</li>
                                  <li>Curabitur blandit pretium interdum. Aliquam sit amet elementum odio, vel ultrices dui. Pellentesque ac odio vitae felis suscipit </li>
                                  <li>Ipuset phas ellus ac sodales Lorem ipsum dolor</li>
                               </ul>
                            </div>
                            <!-- /col-md-->
                         </div>
                        
                        <!-- Gallery -->
                        <div class="cake-cont">
                     <h2>Pick a Taste!</h2>
                     <div class="row">
                        <div class="col-md-4">
                           <div class="cake-click">
                            <router-link to="/singlecake">
                                <img class="img-responsive img-rounded center-block" src="home_ui/img/gallery/gallery3pic.jpg" alt="">
                              </router-link>
                           </div>
                       </div>
                       <div class="col-md-4">
                        <div class="cake-click">
                            <router-link to="/singlecake">
                                <img class="img-responsive img-rounded center-block" src="home_ui/img/gallery/gallery3pic.jpg" alt="">
                              </router-link>
                        </div>
                    </div>
                    <div class="col-md-4">
                     <div class="cake-click">
                        <router-link to="/singlecake">
                                <img class="img-responsive img-rounded center-block" src="home_ui/img/gallery/gallery3pic.jpg" alt="">
                              </router-link>
                     </div>
                 </div>
                       </div>
                       <div class="row">
                        <div class="col-md-4">
                           <div class="cake-click">
                            <router-link to="/singlecake">
                                <img class="img-responsive img-rounded center-block" src="home_ui/img/gallery/gallery3pic.jpg" alt="">
                              </router-link>
                           </div>
                       </div>
                       <div class="col-md-4">
                        <div class="cake-click">
                            <router-link to="/singlecake">
                                <img class="img-responsive img-rounded center-block" src="home_ui/img/gallery/gallery3pic.jpg" alt="">
                              </router-link>
                        </div>
                    </div>
                    <div class="col-md-4">
                     <div class="cake-click">
                        <router-link to="/singlecake">
                                <img class="img-responsive img-rounded center-block" src="home_ui/img/gallery/gallery3pic.jpg" alt="">
                                
                              </router-link>
                     </div>
                 </div>
                       </div>
                    </div>
                        <!-- /gallery-isotope-->
                     </div>
                     <!-- /inside-wrapper -->
                  </section>
    @endsection
</x-home-master>