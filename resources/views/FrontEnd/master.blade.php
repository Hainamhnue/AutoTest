<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Đánh giá công chức viên chức</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{asset('../plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{asset('../plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{asset('css/colors/blue-dark.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <link href="{{asset('04-elements/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('04-elements/css/responsive.css')}}" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>


@include("frontend.elements.navigation")
<!-- Left navbar-header -->
@include("frontend.elements.left-navbar")
<!-- Left navbar-header end -->
    <!-- Page Content -->
@yield("content")
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('../plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{asset('../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<!--slimscroll JavaScript -->
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('js/waves.js')}}"></script>
<!--Counter js -->
<script src="{{asset('../plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
<script src="{{asset('../plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
<!--Morris JavaScript -->
<script src="{{asset('../plugins/bower_components/raphael/raphael-min.js')}}"></script>
<script src="{{asset('../plugins/bower_components/morrisjs/morris.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('js/custom.min.js')}}"></script>
<script src="{{asset('js/dashboard1.js')}}"></script>
<script src="{{asset('../plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
</body>

</html>
