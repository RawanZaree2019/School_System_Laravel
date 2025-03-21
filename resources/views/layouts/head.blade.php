<!-- Title -->
<title>@yield("title")</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon" />

<!-- Font -->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

    <link href="{{ URL::asset('assets/css/wizard.css') }}" rel="stylesheet" id="bootstrap-css">

@yield('css')

<!--- Style css -->
<!-- <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet"> -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!--- Style css -->
@if (App::getLocale() == 'ar')
    <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">
@else
    <link href="{{ URL::asset('assets/css/ltr.css') }}" rel="stylesheet">
@endif
