<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Stock-Taking System')</title>


    @include('theme.partials.cssBase')
</head>

<body class="nav-sm">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <!--Logo -->
                    <a href="/" class="site_title"><i class="fa fa-pencil-square-o"></i> <span> Encuesta</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                @include('theme.partials.profileInfo')
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                @include('theme.partials.menu')
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                @include('theme.partials.footerMenu')
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            @include('theme.partials.menuTop')
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @include('flash::message')
            @include('theme.partials.errors')
            @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            @include('theme.partials.footer')
        </footer>
        <!-- /footer content -->
    </div>
</div>

@include('theme.partials.js')

</body>
</html>