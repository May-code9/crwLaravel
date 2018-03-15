@extends('layouts.master')
@section('title')
Login | Register
@endsection
@section('content')
<!-- Page Title
============================================= -->
<section id="page-title">

  <div class="container clearfix">
    <h1>My Account</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Pages</a></li>
      <li class="breadcrumb-item active" aria-current="page">Login</li>
    </ol>
  </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">

    <div class="container clearfix">

      <div class="col_one_third nobottommargin">

        <div class="well well-lg nobottommargin">
          <form class="nobottommargin" action="{{ route('login') }}" method="post">
            @csrf
            <h3>Login to your Account</h3>

            <div class="col_full">
              <label for="login-form-username">Email Address:</label>
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required />
              @if ($errors->has('email'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>

            <div class="col_full">
              <label for="login-form-password">Password:</label>
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
              @if ($errors->has('password'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>

            <div class="col_full nobottommargin">
              <button class="button button-3d nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
              <a href="#" class="fright">Forgot Password?</a>
            </div>

          </form>
        </div>

      </div>

      <div class="col_two_third col_last nobottommargin">
        <h3>Don't have an Account? Register Now.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta provident sint ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat minus ratione.</p>
        <form class="nobottommargin" action="{{ route('register') }}" method="post">
          @csrf
          <div class="col_half">
            <label for="register-form-name">First Name:</label>
            <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required />

            @if ($errors->has('first_name'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('first_name') }}</strong>
            </span>
            @endif
          </div>

          <div class="col_half col_last">
            <label for="register-form-name">Last Name:</label>
            <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required />

            @if ($errors->has('last_name'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('last_name') }}</strong>
            </span>
            @endif
          </div>

          <div class="col_half">
            <label for="register-form-phone">Phone:</label>
            <input type="text" id="phone" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ old('phone') }}" required />
            @if ($errors->has('phone'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('phone') }}</strong>
            </span>
            @endif
          </div>

          <div class="col_half col_last">
            <label for="register-form-email">Email Address:</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>

          <div class="clear"></div>

          <div class="col_half">
            <label for="register-form-password">Choose Password:</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>

          <div class="col_half col_last">
            <label for="register-form-repassword">Re-enter Password:</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>

          <div class="clear"></div>

          <div class="col_full nobottommargin">
            <button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
          </div>

        </form>

      </div>

    </div>

  </div>

</section><!-- #content end -->
@endsection
