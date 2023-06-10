<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('web.default.includes.metas')
    <title>{{ $pageTitle ?? '' }}{{ !empty($generalSettings['site_name']) ? (' | '.$generalSettings['site_name']) : '' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- General CSS File -->
    <link rel="stylesheet" href="{{asset('assets/v2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/v2/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/v2/vendor/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/v2/css/style.css')}}">

    @stack('styles_top')
    @stack('scripts_top')

</head>

<body>
@include('web.v2.layouts._header')
<div id="app" class="content">

    @yield('content')

    @include('web.v2.layouts._footer')

</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="{{asset('assets/v2/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/v2/vendor/slick/slick.min.js')}}"></script>

@yield('body')

</body>
</html>
