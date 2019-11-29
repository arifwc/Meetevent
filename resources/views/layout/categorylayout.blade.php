<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="CodePixar">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Shop</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
  <!--
  CSS
  ============================================= -->
  <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
   <link rel="stylesheet" href="{{asset('css/ion.rangeSlider.css')}}" />
   <link rel="stylesheet" href="{{asset('css/ion.rangeSlider.skinFlat.css')}}" />
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>

  <!-- Start Header Area -->
  <header class="default-header">
    <div class="menutop-wrap">
      <div class="menu-top container">
        <div class="d-flex justify-content-between align-items-center">
          <ul class="list">
            <li><a href="mailto:support@meetevent.com">support@meetevent.com</a></li>
          </ul>
          <ul class="list">
            <li><a href="#">login</a></li>
          </ul>
        </div>
      </div>
    </div>


    <nav class="navbar navbar-expand-lg  navbar-light">
      <div class="container">
          <a class="navbar-brand" href="/">
            <img src="{{asset('img/logo.png')}}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/category">Category</a></li>
            <li><a href="cart.html">Cart</a></li>
            </ul>
          </div>
      </div>
    </nav>


  </header>
  <!-- End Header Area -->

  <!-- Start Banner Area -->
  <section class="banner-area organic-breadcrumb">
    <div class="container">
      <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
        <div class="col-first">
          <h1>Vendor Category</h1>
          <nav class="d-flex align-items-center justify-content-start">
            <a href="/">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
            <a href="/category">Category<i class="fa fa-caret-right" aria-hidden="true"></i></a>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner Area -->
  <div class="container">
    <div class="row">
      <div class="col-xl-9 col-lg-8 col-md-7">

        <!-- Start Filter Bar -->
        <div class="filter-bar d-flex flex-wrap align-items-center">
          <a href="#" class="grid-btn active"><i class="fa fa-th" aria-hidden="true"></i></a>
          <a href="#" class="list-btn"><i class="fa fa-th-list" aria-hidden="true"></i></a>
          <div class="sorting">
            <select>
              <option value="1">Default sorting</option>
              <option value="1">Default sorting</option>
              <option value="1">Default sorting</option>
            </select>
          </div>
          <div class="sorting mr-auto">
            <select>
              <option value="1">Show 12</option>
              <option value="1">Show 12</option>
              <option value="1">Show 12</option>
            </select>
          </div>
        </div>
        <!-- End Filter Bar -->

        <!-- Start Best Seller -->
        @yield('page')

        <!-- End Best Seller -->


        <!-- Start Filter Bar -->
        <div class="filter-bar d-flex flex-wrap align-items-center">

          <div class="pagination ml-auto">
            <!-- <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
            <a href="#">6</a>
            <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
            {{ $products->links() }}
          </div>
        </div>
        <!-- End Filter Bar -->
      </div>
      <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="sidebar-categories">
          <div class="head">Browse Categories</div>
          <ul class="main-categories">
            <li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span class="lnr lnr-arrow-right"></span>Sound System<span class="number">(53)</span></a>
            </li>

            <li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish"><span class="lnr lnr-arrow-right"></span>Stage/Panggung<span class="number">(53)</span></a>
            </li>
            <li class="main-nav-list"><a data-toggle="collapse" href="#cooking" aria-expanded="false" aria-controls="cooking"><span class="lnr lnr-arrow-right"></span>Lightning<span class="number">(53)</span></a>
            </li>
            <li class="main-nav-list"><a data-toggle="collapse" href="#beverages" aria-expanded="false" aria-controls="beverages"><span class="lnr lnr-arrow-right"></span>Konsumsi<span class="number">(24)</span></a>
            </li>
            <li class="main-nav-list"><a data-toggle="collapse" href="#homeClean" aria-expanded="false" aria-controls="homeClean"><span class="lnr lnr-arrow-right"></span>Lain-lain<span class="number">(53)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <section class='section-half'>

  </section>
  <!-- Start Most Search Product Area -->

  <!-- End Most Search Product Area -->

  <!-- start footer Area -->
  <footer class="footer-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>About Us</h6>
            <p>
              MeetEvent merupakan suatu platform digital berbasis web yang bertujuan untuk dapat mempertemukan antara vendor dengan event dalam suatu sistem marketplace.
            </p>
          </div>
        </div>
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Newsletter</h6>
            <p>Stay update with our latest</p>
            <div class="" id="mc_embed_signup">

                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                <div class="d-flex flex-row">

                  <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                  <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                  <div style="position: absolute; left: -5000px;">
                      <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                    </div>

                  <!-- <div class="col-lg-4 col-md-4">
                    <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                  </div>  -->
                </div>
                <div class="info"></div>
                </form>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Follow Us</h6>
            <p>Let us be social</p>
            <div class="footer-social d-flex align-items-center">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">

        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i></p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </div>
    </div>
  </footer>
  <!-- End footer Area -->



<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/jquery.sticky.js')}}"></script>
<script src="{{asset('js/ion.rangeSlider.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
