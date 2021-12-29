
@extends('FrontEnd.master')

@section('content')
{{--</head>--}}
{{--<body>--}}
<section class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-lg-2"></div>
            <div class="col-md-10 col-md-offset-1 col-lg-8">
                <div class="intro">
                    <div class="profile-img"><img src="{{asset("public/images/".Auth::user()->image)}}" width="100" class="img-circle" alt=""></div>
                    <h2 class="font-yellow"><b>Chúc mừng bạn đã hoàn thành quá trình tự đánh giá!</b></h2>
                    <h4 class="font-yellow">{{Auth::user()->bomon}}</h4>
                    <h1 class="font-success"><b>{{Auth::user()->disgest}}</b></h1>
                    @if(Auth::user()->disgest == 'A')
                    <h2 class="font-blue"><b>{{'Hoàn thành xuất sắc nhiệm vụ'}}</b></h2>
                    @elseif(Auth::user()->disgest == 'B')
                        <h2 class="font-blue"><b>{{'Hoàn thành xuất sắc nhiệm vụ'}}</b></h2>
                        @else
                            <h2 class="font-blue"><b>{{'Chưa hoàn thành nhiệm vụ nhiệm vụ'}}</b></h2>
                        @endif
                </div><!-- intro -->
            </div><!-- col-sm-8 -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- intro-section -->
<!-- SCIPTS -->

@endsection
<link href="{{asset('04-elements/css/styles.css')}}" rel="stylesheet">
<link href="{{asset('04-elements/css/responsive.css')}}" rel="stylesheet">
{{--</body>--}}
{{--</html>--}}
