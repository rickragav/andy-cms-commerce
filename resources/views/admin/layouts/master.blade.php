<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Default Dashboard | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/dashlite.min.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('backend/assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/uppy.css') }}">
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">

            @include('admin.layouts.sidebar')

            <!-- wrap @s -->
            <div class="nk-wrap ">

                @include('admin.layouts.navbar')

                <!-- content @s -->
                <div class="nk-content">
                    @yield('content')
                </div>
                <!-- content @e -->

                @include('admin.layouts.footer')

            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->



    <!-- JavaScript -->
    <script src="{{ asset('backend/assets/js/bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('backend/assets/js/charts/chart-ecommerce.js?ver=3.2.3') }}"></script>


    <!--build:js-->
    @include('backend.inc.scripts')
    <!--endbuild-->


    <!-- scripts from different pages -->
    @yield('scripts')

</body>

</html>
