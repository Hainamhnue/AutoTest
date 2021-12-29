@extends('donvi.master')
@section('title','Thông tin đơn vị')
@section("content")
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Thông tin đơn vị</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <!-- <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> -->
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Profile</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="white-box">
                        <div class="user-bg"> <img width="100%" alt="user" src="{{asset("public/images/".Auth::user()->img)}}">
                            <div class="overlay-box">
                                <div class="user-content">
                                    <a href="javascript:void(0)"><img src="{{asset("public/images/".Auth::user()->img)}}" class="thumb-lg img-circle" alt="img"></a>
                                    <h4 class="text-white"></h4>
                                    <h5 class="text-white"></h5> </div>
                            </div>
                        </div>
                        <div class="user-btm-box">

                            <div class="col-md-4 col-sm-4 text-center">
                                <p class="text-blue"><i class="ti-twitter"></i></p>
                                <h1></h1> </div>
                            <div class="col-md-4 col-sm-4 text-center">
                                <p class="text-danger"><i class="ti-dribbble"></i></p>
                                <h1></h1>
                            </div>
{{--                            <div class="col-md-4 col-sm-4 text-center">--}}
{{--                                <p class="text-purple"><i class="ti-facebook"></i></p>--}}
{{--                                <h1>10</h1> --}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="white-box">
                        <form class="form-horizontal form-material">
                            {{--                            @method('PUT')--}}
                            {{--                            {{csrf_field()}}--}}
                            <div class="form-group">
                                <label for="validationServer01">Tên khoa </label>
                                <input type="text" class="form-control is-valid" id="validationServer01" value="" required name="name">
                            </div>
                            <div class="form-group">
                                <label for="validationServer02">Email</label>
                                <input type="email" class="form-control is-valid" id="validationServer02" value="" required name="email">
                            </div>
                            <div class="form-group">
                                <label for="validationServer03">Số điện thoại</label>
                                <input type="number" class="form-control is-valid" id="validationServer03" placeholder="" required value="" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="validationServer04">Địa chỉ: </label>
                                <input type="text" class="form-control is-valid" id="validationServer04" value="" name="address">
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Giới thiệu</label>
                                <div class="col-md-12">
                                    <textarea rows="5" class="form-control form-control-line" name="introduction"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <a href="" class="btn btn-success active" role="button" aria-pressed="true">Update Profile</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2020 &copy; Admin
            <!-- /#page-wrapper -->
@endsection
