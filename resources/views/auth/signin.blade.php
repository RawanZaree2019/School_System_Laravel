<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>{{ trans('login_trans.Login') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

    <!-- css -->
    <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">

</head>


<body>

    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="images/pre-loader/loader-01.svg" alt="">
        </div>

        <!--================================= preloader -->

        <!--================================= login-->

 <ul class="nav ml-30">
    <li class="">
        <div class="dropdown  nav-itemd-none d-md-flex">
            <a href="#" class="d-flex  nav-item nav-link pl-0 country-flag1" data-toggle="dropdown"
               aria-expanded="false">
                @if (App::getLocale() == 'ar')
                    <span class="avatar country-Flag mr-0 align-self-center bg-transparent">
                        <img src="{{URL::asset('assets/images/flags/syria.jpg')}}" alt="img"
                            style="width: 30px; height: auto; display: inline-block; vertical-align: middle;">
                @else
                    <span class="avatar country-Flag mr-0 align-self-center bg-transparent">
                        <img src="{{URL::asset('assets/images/flags/us_flag.jpg')}}" alt="img"
                                 style="width: 30px; height: auto; display: inline-block; vertical-align: middle;">

                    </span>
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        @if($properties['native'] == "English")
                        <img src="{{URL::asset('assets/images/flags/us_flag.jpg')}}" alt="img"
                        style="width: 20px; height: auto; display: inline-block; vertical-align: middle;">
                        @elseif($properties['native'] == "العربية")
                            <img src="{{URL::asset('assets/images/flags/syria.jpg')}}" alt="img"
                                 style="width: 20px; height: auto; display: inline-block; vertical-align: middle;">
                        @endif
                        {{ $properties['native'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </li>
</ul>

        <section class="height-100vh d-flex align-items-center page-section-ptb login {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
            style="background-image: url(assets/images/login-bg.jpg);" >
            <div class="container">
                <div class="row justify-content-center no-gutters vertical-align">
                    <div class="col-lg-4 col-md-6 login-fancy-bg bg"
                        style="background-image: url(images/login-inner-bg.jpg);">
                        <div class="login-fancy">
                            <style>
                                .school-subtitle {
                                    font-size: 20px;
                                }

                                .ltr {
                                    text-align: left;
                                }
                            </style>
                            <h2 class="text-white mb-10">{{ trans('login_trans.School_Name') }}</h2>
                            <br>
                            <br>
                            <p class="school-subtitle mb-20 text-white">{{ trans('login_trans.description') }}</p>
                            <!-- <ul class="list-unstyled  pos-bot pb-30">
                                <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>
                                <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 bg-white">
                        <div class="login-fancy pb-40 clearfix">
                            <h3 class="mb-30">{{ trans('login_trans.Login') }}</h3>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="section-field mb-20">
                                    <label class="mb-10" for="name">{{ trans('login_trans.Email') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <div class="section-field mb-20">
                                    <label class="mb-10" for="Password">{{ trans('login_trans.Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="section-field">
                                    <div class="remember-checkbox mb-30">
                                        <input type="checkbox" class="form-control" name="two" id="two" />
                                        <label for="two">{{ trans('login_trans.remember_me') }}</label><br>
                                        <a href="#" class="float-right">?{{ trans('login_trans.forgot_password') }}</a>
                                    </div>
                                </div>
                                <button class="button"><span>{{ trans('login_trans.Login') }}</span><i class="fa fa-check"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=================================
 login-->

    </div>
    <!-- jquery -->
    <script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- plugins-jquery -->
    <script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>
    <!-- plugin_path -->
    <script>
        var plugin_path = 'js/';

    </script>

    <!-- chart -->
    <script src="{{ URL::asset('assets/js/chart-init.js') }}"></script>
    <!-- calendar -->
    <script src="{{ URL::asset('assets/js/calendar.init.js') }}"></script>
    <!-- charts sparkline -->
    <script src="{{ URL::asset('assets/js/sparkline.init.js') }}"></script>
    <!-- charts morris -->
    <script src="{{ URL::asset('assets/js/morris.init.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ URL::asset('assets/js/datepicker.js') }}"></script>
    <!-- sweetalert2 -->
    <script src="{{ URL::asset('assets/js/sweetalert2.js') }}"></script>
    <!-- toastr -->
    @yield('js')
    <script src="{{ URL::asset('assets/js/toastr.js') }}"></script>
    <!-- validation -->
    <script src="{{ URL::asset('assets/js/validation.js') }}"></script>
    <!-- lobilist -->
    <script src="{{ URL::asset('assets/js/lobilist.js') }}"></script>
    <!-- custom -->
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
