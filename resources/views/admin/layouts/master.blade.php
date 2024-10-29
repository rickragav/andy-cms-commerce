<!DOCTYPE html>
<html lang="en" dir="">

<head>
    @include('admin.layouts.head')
</head>

<body>
    <div class="app" id="app">
        @include('admin.layouts.menu')
        <div id="content" class="app-content box-shadow-z0" role="main">
            @include('admin.layouts.header')
            @include('admin.layouts.footer')
            <div ui-view class="app-body" id="view">
                @include('admin.layouts.errors')
                @yield('content')
            </div>
        </div>
    </div>
    @include('admin.layouts.foot')
</body>

</html>
