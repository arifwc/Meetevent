@extends('layout.mainlayout')

@section('page')
<!-- start banner Area -->
<section class="background-tint banner-area relative " id="home">
  <div class="container-fluid">
    <div class="row fullscreen align-items-center justify-content-center">
      <div class="banner-content col-lg-6 col-md-12">
        <h1 class="text-uppercase">
          Cari Vendor Terbaik <br>
          untuk Event Anda!
        </h1>
        <button class="primary-btn text-uppercase"><a href="category.html">Cari Vendor Sekarang!</a></button>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->

<!-- Start category Area -->
<section class="category-area section-gap section-gap" id="catagory">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-40">
        <div class="title text-center">
          <h1 class="mb-10">Cari Vendor Sesuai Kebutuhan</h1>
          <p>Mulailah mencari vendor yang sesaui dengan kebutuhan event anda.</p>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col-lg-4 col-md-4 mb-4">
          <div class="content">
              <a href="#" target="_blank">
                <div class="content-overlay"></div>
                 <img class="content-image img-fluid d-block mx-auto index-content-img" src="img/c1.jpg" alt="">
                <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">Sound System</h3>
                </div>
              </a>
          </div>
    </div>
    <div class="col-lg-4 col-md-4 mb-4">
          <div class="content">
              <a href="#" target="_blank">
                <div class="content-overlay"></div>
                 <img class="content-image img-fluid d-block mx-auto index-content-img" src="img/c2.jpg" alt="">
                <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">Panggung</h3>
                </div>
              </a>
          </div>
    </div>
    <div class="col-lg-4 col-md-4 mb-4">
          <div class="content">
              <a href="#" target="_blank">
                <div class="content-overlay"></div>
                 <img class="content-image img-fluid d-block mx-auto index-content-img" src="img/c3.jpg" alt="">
                <div class="content-details fadeIn-bottom">
                  <h3 class="content-title">Lainnya</h3>
                </div>
              </a>
          </div>
    </div>
  </div>
</section>
<!-- End category Area -->


@endsection
