<meta charset="utf-8" />
<title>@yield('title')</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
<link rel="apple-touch-icon" href="{{ asset('assets/dashboard/images/logo.png') }}">
<meta name="apple-mobile-web-app-title" content="Smartend">
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="mobile-web-app-capable" content="yes">
<link rel="shortcut icon" sizes="196x196" href="{{ asset('assets/dashboard/images/logo.png') }}">
@stack('before-styles')
<link rel="stylesheet" href="{{ asset('assets/dashboard/css/animate.css/animate.min.css') }}?v={{ system_version() }}"
    type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/dashboard/css/animate.css/animate.min.css') }}?v={{ system_version() }}"
    type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/dashboard/fonts/glyphicons/glyphicons.css') }}?v={{ system_version() }}"
    type="text/css" />
<link rel="stylesheet"
    href="{{ asset('assets/dashboard/fonts/font-awesome/css/font-awesome.min.css') }}?v={{ system_version() }}"
    type="text/css" />
<link rel="stylesheet"
    href="{{ asset('assets/dashboard/fonts/material-design-icons/material-design-icons.css') }}?v={{ system_version() }}"
    type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/dashboard/js/sweetalert/sweetalert.css') }}">

<link rel="stylesheet"
    href="{{ asset('assets/dashboard/css/bootstrap/dist/css/bootstrap.min.css') }}?v={{ system_version() }}"
    type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/dashboard/css/app.css') }}?v={{ system_version() }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/dashboard/css/font.css') }}?v={{ system_version() }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/dashboard/css/topic.css') }}?v={{ system_version() }}"
    type="text/css" />
<link href="{{ asset('assets/dashboard/js/iconpicker/fontawesome-iconpicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/dashboard/js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/dashboard/js/tags-input/tagsinput.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/css/custom.css') }}" rel="stylesheet">

{{-- @if (@Helper::currentLanguage()->direction == 'rtl')
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/bootstrap-rtl/dist/bootstrap-rtl.css') }}?v={{ Helper::system_version() }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/app.rtl.css') }}?v={{ Helper::system_version() }}">
@endif --}}
@stack('after-styles')
