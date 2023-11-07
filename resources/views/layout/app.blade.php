<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Dashboard Template">
    <meta name="author" content="Femtechit TMS">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <title>{{ config('app.name', 'FEMTECHIT TMS')  }}</title>

    <link href="{{ asset('assets/lib/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.html') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/remixicon/fonts/remixicon.css') }}" rel="stylesheet">

    <!-- Dashforge core css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashforge.css') }}">

    @yield('css')

</head>
<body>

@if(isset($login_layout))
    @include('layout.auth.header')
@else
    @include('shared.nav')
    @include('shared.header')
@endif



{{ $slot }}

@if(isset($login_layout))
    @include('layout.auth.footer')
@endif
<script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/lib/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/lib/ionicons/ionicons/ionicons.esm.js') }}" type="module"></script>
<script src="{{ asset('assets/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<!-- Dashforge core js  -->
<script src="{{ asset('assets/js/dashforge.js') }}"></script>
<script src="{{ asset('assets/js/dashforge.aside.js') }}"></script>

@yield('js')
</body>
</html>
