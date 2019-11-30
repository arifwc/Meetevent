@extends('layout.mainlayout')

@section('page')

<section class='section-half'>

</section>
<!-- Start My Account -->
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="login-form">
        <h3 class="billing-title text-center">Login</h3>
        <p class="text-center mt-80 mb-40">Welcome back! Sign in to your account </p>
        <form action="/login" method="post">
          @csrf
          <input name="email" type="text" placeholder="Email*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email*'" required class="common-input mt-20 form-control @error('email') is-invalid @enderror">

          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror

          <input name="password" type="password" placeholder="Password*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password*'" required class="common-input mt-20 form-control @error('password') is-invalid @enderror">

          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror

          <button type="submit" class="view-btn color-2 mt-20 w-100"><span>Login</span></button>
          <div class="mt-20 d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center"><input type="checkbox" class="pixel-checkbox" id="login-1"><label for="login-1">Remember me</label></div>
            {{-- <a href="#">Lost your password?</a> --}}
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-6">
      <div class="register-form">
        <h3 class="billing-title text-center">Register</h3>
        <p class="text-center mt-40 mb-30">Create your very own account </p>
        <form action="/register" method="post">
          @csrf
          <input name="name" type="text" placeholder="Full name*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Full name*'" required class="common-input mt-20 form-control @error('name') is-invalid @enderror">

          @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror

          <input name="email" type="email" placeholder="Email address*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email address*'" required class="common-input mt-20 form-control @error('email') is-invalid @enderror">

          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

          <input name="password" type="password" placeholder="Password*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password*'" required class="common-input mt-20 form-control @error('password') is-invalid @enderror">

          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

          <button type="submit" class="view-btn color-2 mt-20 w-100"><span>Register</span></button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End My Account -->

@endsection
