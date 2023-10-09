@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


  <!--authentication-->

  <div class="section-authentication-cover">
    <div class="">
      <div class="row g-0">

        <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex bg-primary">

          <div class="card rounded-0 mb-0 border-0 bg-transparent">
            <div class="card-body">
              <img src="assets/images/boxed-login.png" class="img-fluid auth-img-cover-login" width="650"
                alt="">
            </div>
          </div>

        </div>

        <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
          <div class="card rounded-0 m-3 mb-0 border-0">
            <div class="card-body p-sm-5">
              <img src="assets/images/logo-icon.png" class="mb-4" width="45" alt="">
              <h4 class="fw-bold">Get Started Now</h4>
              <p class="mb-0">Enter your credentials to login your account</p>

              <div class="row g-3 my-4">
                <div class="col-12 col-lg-6">
                  <button class="btn btn-light py-2 border-3 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="assets/images/icons/google-2.png" width="18" class="me-2" alt="">Log In with Google</button>
                </div>
                <div class="col col-lg-6">
                  <button class="btn btn-light py-2 border-3 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="assets/images/icons/apple-logo.png" width="18" class="me-2" alt="">Log In with Apple</button>
                </div>
              </div>

              <div class="separator section-padding">
                <div class="line"></div>
                <p class="mb-0 fw-bold">OR</p>
                <div class="line"></div>
              </div>

              <div class="form-body mt-4">
                <form class="row g-3">
                  <div class="col-12">
                    <label for="inputEmailAddress" class="form-label">Email</label>
                    <input type="email" class="form-control  border-3" id="inputEmailAddress" placeholder="jhon@example.com">
                  </div>
                  <div class="col-12">
                    <label for="inputChoosePassword" class="form-label">Password</label>
                    <div class="input-group" id="show_hide_password">
                      <input type="password" class="form-control border-end-0  border-3" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> 
                      <a href="javascript:;" class="input-group-text bg-transparent  border-3"><i class="bi bi-eye-slash-fill"></i></a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-switch  border-3">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                      <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                    </div>
                  </div>
                  <div class="col-md-6 text-end">	<a href="auth-cover-forgot-password.html">Forgot Password ?</a>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button type="submit" class="btn  border-3 btn-primary">Login</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="text-start">
                      <p class="mb-0">Don't have an account yet? <a href="auth-cover-register.html">Sign up here</a>
                      </p>
                    </div>
                  </div>
                </form>
              </div>

          </div>
          </div>
        </div>

      </div>
      <!--end row-->
    </div>
  </div>

  <!--authentication-->




  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>

  <script>
    $(document).ready(function () {
      $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
          $('#show_hide_password input').attr('type', 'password');
          $('#show_hide_password i').addClass("bi-eye-slash-fill");
          $('#show_hide_password i').removeClass("bi-eye-fill");
        } else if ($('#show_hide_password input').attr("type") == "password") {
          $('#show_hide_password input').attr('type', 'text');
          $('#show_hide_password i').removeClass("bi-eye-slash-fill");
          $('#show_hide_password i').addClass("bi-eye-fill");
        }
      });
    });
  </script>

@endsection
