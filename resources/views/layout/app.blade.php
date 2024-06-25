<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content>
    <meta name="author" content>
    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logo.svg') }}">

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">

    <link href="{{ asset('vendor/icons/css/materialdesignicons.min.css') }}" media="all" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('vendor/select2/css/select2-bootstrap.css') }}" />
    <link href="{{ asset('vendor/select2/css/select2.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/owl.theme.css') }}">

    <link href="{{ asset('css/osahan.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper">
            <div id="content">
                @if (Auth::user()->user_type == 'super_admin')
                    <livewire:menus.super-admin-menu />
                @elseif(Auth::user()->user_type == 'brand_manager')
                    <livewire:menus.brand-manager-menu />
                @elseif(Auth::user()->user_type == 'customer')
                    <livewire:menus.customer-menu />
                @endif

                @yield('content')

                @include('layout.partials.footer')
            </div>
        </div>
    </div>

    <a class="scroll-to-top rounded-circle" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('vendor/select2/js/select2.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('vendor/owl-carousel/owl.carousel.js') }}" type="text/javascript"></script>

    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
    <script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="|49" defer>
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8962f151ca8b0a48","version":"2024.4.1","r":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","b":1}'
        crossorigin="anonymous"></script>
    @livewireScripts
</body>

</body>

</html>
