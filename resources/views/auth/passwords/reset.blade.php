<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{URL::asset('assets/images/image 1.png')}}">
        <title>{{config('app.name')}} - Member Reset Password</title>
        <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
        <!--Scroll In Animation-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="https://kit.fontawesome.com/997b229808.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            window.setTimeout(function() {
                $(".alert-timeout").fadeTo(500, 0).slideUp(1000, function(){
                    $(this).remove(); 
                });
            }, 2500);
        </script>
    </head>
    <body id="back">
        <section class="logIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="sign">
                            <h4>
                                <a href="/">
                                    <img src="{{URL::asset('assets/images/image 1.png')}}" draggable="false" alt=""> 
                                </a>{{ __('Reset Password') }}
                            </h4>
                            <div class="line-rule">
                            @includeIf('layouts.error_template')
                            </div>
                            <form class="sign-div" method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="col-lg-12">
                                        <label>{{ __('Email Address') }}</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <i class="bi bi-envelope"></i>
                                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <label>{{ __('Password') }}</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <i class="bi bi-phone"></i>
                                                <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <label>{{ __('Confirm Password') }}</label>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <i class="bi bi-phone"></i>
                                                <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <button type="submit">{{ __('Reset Password') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </section>
        <!--Scroll In Animation-->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/main.js')}}"></script>
    </body>
</html>
