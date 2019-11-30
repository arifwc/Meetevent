@extends('layout.mainlayout')

@section('page')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
            <div class="col-first">
                <h1>Order Checkout</h1>
                 <nav class="d-flex align-items-center justify-content-start">
                   <a href="/">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                   <a href="/category">Category<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                   <a href="#">Checkout</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Billing Details Form -->
<div class="container">
    <form action="/finish" class="billing-form">
        <div class="row">
            <div class="col-lg-12">
                <div class="order-wrapper mt-50">
                    <h3 class="billing-title mb-10">Your Order</h3>
                    <div class="order-list">
                        <div class="list-row d-flex justify-content-between">
                            <div>Product</div>
                            <div>Jumlah</div>
                            <div>Total</div>
                        </div>
                        <div class="list-row d-flex justify-content-between">
                            <div>{{$rent->product->name}}</div>
                            {{-- <div>{{$orderForm['jumlah']}}</div> --}}
                            <div>{{$products->price}}</div>
                        </div>
                        <div class="list-row d-flex justify-content-between">
                            <h6>Total</h6>
                            {{-- <div class="total">${{$orderForm['jumlah']*$products->price}}</div> --}}
                        </div>
                        <div class="d-flex align-items-center mt-10">
                            <input class="pixel-radio" type="radio" id="check" name="brand">
                            <label for="check" class="bold-lable">Transfer Bank</label>
                        </div>
                        <p class="payment-info">Transfer langsung melalui bank pilihan anda.</p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <input class="pixel-radio" type="radio" id="paypal" name="brand">
                                <label for="paypal" class="bold-lable">Paypal</label>
                            </div>
                            <img src="{{asset('img/pm.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <p class="payment-info">Bayar menggunakan Paypal; anda bisa membayar langsung dengan kartu kredit via Paypal.</p>
                        <div class="mt-20 d-flex align-items-start">
                            <input type="checkbox" class="pixel-checkbox" id="login-4" required>
                            <label for="login-4">I’ve read and accept the <a href="#" class="terms-link">terms & conditions*</a></label>
                        </div>
                        <button class="view-btn color-2 w-100 mt-20"><span>Proceed to Checkout</span></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- End Billing Details Form -->


@endsection
