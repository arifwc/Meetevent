@extends('layout.categorylayout')

@section('page')
<section class="lattest-product-area pb-40 category-list">
  <div class="row">

  <?php foreach ($products as $product): ?>
    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
      <div class="content">
          <div class="content-overlay"></div>
           <img class="content-image img-fluid d-block mx-auto" src="{{$product->image_path}}" alt="">
          <div class="content-details fadeIn-bottom">
              <div class="bottom d-flex align-items-center justify-content-center">
            <a href="{{ route('product.single', ['id' => $product->id]) }}"><span class="lnr lnr-frame-expand"></span></a>
            <a href="#"><span class="lnr lnr-cart"></span></a>
          </div>
          </div>
      </div>
      <div class="price">
          <a href="{{ route('product.single', ['id' => $product->id]) }}"><h5>{{$product->name}}</h5></a>
          <h3>{{$product->price}}$</h3>
       </div>

    </div>

  <?php endforeach; ?>



  </div>
</section>



@endsection
