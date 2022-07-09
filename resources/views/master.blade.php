<!doctype html>
<html lang="en">

<head>
    @include('share.head')
</head>

<body>
    @include('share.top')
    <!--end menu-->
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    @yield('title')
                </div>
            </div>
            @yield('content')
        </div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        @include('share.foot')
        <!--end section-->
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <a href="#" class="scrollup brown-2"></a><!-- end scroll to top of the page-->
    </div>

    <!-- ============ JS FILES ============ -->
    @include('share.bot')
    @yield('js')
</body>

</html>
