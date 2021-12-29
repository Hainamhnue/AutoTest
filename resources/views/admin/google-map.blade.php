@extends("donvi.master")
@section("content")
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Starter Page</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="{{url('donvi')}}" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Google Map</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Simple Basic Map</h3>
                        <div id="gmaps-simple" class="gmaps"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2020 &copy; Admin </footer>
    </div>
    <!-- /#page-wrapper -->
@endsection
<!-- google maps api -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="../plugins/bower_components/gmaps/gmaps.min.js"></script>
<script src="../plugins/bower_components/gmaps/jquery.gmaps.js"></script>

