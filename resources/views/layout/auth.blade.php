<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logo.svg') }}" />

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" />

    <link href="{{ asset('vendor/icons/css/materialdesignicons.min.css') }}" media="all" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('vendor/select2/css/select2-bootstrap.css') }}" />
    <link href="{{ asset('vendor/select2/css/select2.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/owl.theme.css') }}" />

    <link href="{{ asset('css/osahan.css') }}" rel="stylesheet" />
    @livewireStyles
</head>

<body class="login-main-body">
    @yield('content')
    <script
      src="{{ asset('vendor/jquery/jquery.min.js') }}"
      type="151b6396949644fc8d962b90-text/javascript"
    ></script>
    <script
      src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"
      type="151b6396949644fc8d962b90-text/javascript"
    ></script>

    <script
      src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"
      type="151b6396949644fc8d962b90-text/javascript"
    ></script>

    <script
      src="{{ asset('vendor/select2/js/select2.min.js') }}"
      type="151b6396949644fc8d962b90-text/javascript"
    ></script>

    <script
      src="{{ asset('vendor/owl-carousel/owl.carousel.js') }}"
      type="151b6396949644fc8d962b90-text/javascript"
    ></script>

    <script
      src="{{ asset('js/custom.js') }}"
      type="151b6396949644fc8d962b90-text/javascript"
    ></script>
    <script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="151b6396949644fc8d962b90-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8962f40eaec76685","version":"2024.4.1","r":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","b":1}'
        crossorigin="anonymous"></script>
        @livewireScripts
</body>

</html>
