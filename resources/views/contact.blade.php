@extends('layout.mainlayout')

@section('page')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
            <div class="col-first">
                <h1>Contact Us</h1>
                 <nav class="d-flex align-items-center justify-content-start">
                    <a href="index.html">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <a href="cart.html">Contact</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start My Account -->
<div class="container">
<div class="order-tracking">
  <h3>Ask a Question</h3>
  <form action="#" class="main-form">
      <input type="text" placeholder="Your Full name" onfocus="this.placeholder=''" onblur="this.placeholder = 'Your Full name'" required class="common-input">
      <input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email Address'" required class="common-input">
      <input type="text" placeholder="Phone Number" onfocus="this.placeholder=''" onblur="this.placeholder = 'Phone Number'" required class="common-input">
      <textarea placeholder="Message" onfocus="this.placeholder=''" onblur="this.placeholder = 'Message'" required class="common-textarea"></textarea>
      <button class="view-btn color-2 mt-20"><span>Submit</span></button>
  </form>
</form>
</div>
</div>
<!-- End My Account -->

@endsection
