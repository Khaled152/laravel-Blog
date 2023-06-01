<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<!-- Mirrored from preview.tabler.io/layout-condensed.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 May 2023 10:09:47 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <script defer data-api="{{ asset('back/stats/api/event') }}" data-domain="preview.tabler.io" src="{{ asset('back/stats/js/script.js') }}"></script>
    <meta name="msapplication-TileColor" content="" />
    <meta name="theme-color" content="" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="{{ asset('back/image/x-icon"') }} />
    <meta name="description content="Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!" />
    <meta name="canonical" content="https://preview.tabler.io/layout-condensed.html">
    <meta name="twitter:image:src" content="https://preview.tabler.io/static/og.png">
    <meta name="twitter:site" content="@tabler_ui">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title"
        content="Tabler: Premium and Open Source dashboard template with responsive and high quality UI.">
    <meta name="twitter:description"
        content="Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!">
    <meta property="og:image" content="https://preview.tabler.io/static/og.png">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="640">
    <meta property="og:site_name" content="Tabler">
    <meta property="og:type" content="object">
    <meta property="og:title"
        content="Tabler: Premium and Open Source dashboard template with responsive and high quality UI.">
    <meta property="og:url" content="https://preview.tabler.io/static/og.png">
    <meta property="og:description"
        content="Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!">
    <!-- CSS files -->
    <link href="{{ asset('back/dist/css/tabler.min118a.css?1684106145') }}" rel="stylesheet" />
    <link href="{{ asset('back/dist/css/tabler-flags.min118a.css?1684106145') }}" rel="stylesheet" />
    <link href="{{ asset('back/dist/css/tabler-payments.min118a.css?1684106145') }}" rel="stylesheet" />
    <link href="{{ asset('back/dist/css/tabler-vendors.min118a.css?1684106145') }}" rel="stylesheet" />
    <link href="{{ asset('back/dist/libs/ijabo/ijabo.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('back/dist/libs/ijaboCropTool/ijaboCropTool.min.css') }}" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

    @yield('stylesheet')
    @livewireStyles

    <link href="{{ asset('back/dist/css/demo.min118a.css?1684106145') }}" rel="stylesheet" />
    <style>

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="{{ asset('back/dist/js/demo-theme.min118a.js?1684106145') }}"></script>
    <div class="page">
        <!-- Navbar -->
        @include('back.layouts.inc.header')
        <div class="page-wrapper">
            <!-- Page header -->
            @yield('pageHeader')
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    @yield('content')

                </div>
            </div>
            @include('back.layouts.inc.footer')
        </div>
    </div>

    <!-- Libs JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="{{ asset('back/dist/libs/apexcharts/dist/apexcharts.min118a.js?1684106145') }}" defer></script>
    <script src="{{ asset('back/dist/libs/jsvectormap/dist/js/jsvectormap.min118a.js?1684106145') }}" defer></script>
    <script src="{{ asset('back/dist/libs/jsvectormap/dist/maps/world118a.js?1684106145') }}" defer></script>
    <script src="{{ asset('back/dist/libs/jsvectormap/dist/maps/world-merc118a.js?1684106145') }}" defer></script>
    <script src="{{ asset('back/dist/libs/ijabo/ijabo.min.js') }}"></script>
    <script src="{{ asset('back/dist/libs/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('back/dist/libs/apexcharts/dist/apexcharts.min118a.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <!-- Tabler Core -->
    <script src="{{ asset('back/dist/js/tabler.min118a.js?1684106145') }}" ></script>
    <script src="{{ asset('back/dist/js/demo.min118a.js?1684106145') }}" ></script>
    <script src="{{ asset('back/dist/libs/ijaboCropTool/ijaboCropTool.min.js') }}"></script>
    @yield('scripts')
    @livewireScripts
    <script>
        window.addEventListener('showToastr ',function(event){
            toastr.remove();
            if(event.detail.type === 'info'){
                toastr.info(event.detail.message);
            }else if(event.detail.type === 'success'){
                toastr.success(event.detail.message);
            }else if(event.detail.type === 'error'){
                toastr.error(event.detail.message);
            }else if(event.detail.type === 'warning'){
                toastr.warning(event.detail.message);
            }else{
                return false;
            }
        });
    </script>


</body>

<!-- Mirrored from preview.tabler.io/layout-condensed.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 May 2023 10:09:48 GMT -->

</html>
