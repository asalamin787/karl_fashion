@extends('layouts.app')
@section('css_link')
    <!--plugins-->
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.10.3/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dark-theme.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
@endsection
@section('content')
 <!--authentication-->

    <div class="section-authentication-cover">
        <div class="">
            <div class="row g-0">

                <div
                    class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex bg-primary">

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
                                    <button
                                        class="btn btn-light py-2 border-3 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img
                                            src="assets/images/icons/google-2.png" width="18" class="me-2"
                                            alt="">Log In with Google</button>
                                </div>
                                <div class="col col-lg-6">
                                    <button
                                        class="btn btn-light py-2 border-3 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img
                                            src="assets/images/icons/apple-logo.png" width="18" class="me-2"
                                            alt="">Log In with Apple</button>
                                </div>
                            </div>

                            <div class="separator section-padding">
                                <div class="line"></div>
                                <p class="mb-0 fw-bold">OR</p>
                                <div class="line"></div>
                            </div>

                            <div class="form-body mt-4">
                                <form method="POST" action="{{ route('login') }}" class="row g-3">
                                    @csrf
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Email</label>
                                        <input id="email" type="email"
                                            class="form-control  border-3 @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Password</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <a href="javascript:;" class="input-group-text bg-transparent  border-3"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-check form-switch  border-3">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 text-end">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn  border-3 btn-primary">Login</button>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="text-start">
                                            <p class="mb-0">Don't have an account yet? <a
                                                    href="{{route('register')}}">Sign up here</a>
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






    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
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
