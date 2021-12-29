@extends("donvi.master")
@section('title','Đánh giá đơn vị')
@section("content")
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Bảng tự đánh giá cho điểm đơn vị.</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <!-- <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> -->
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Đánh giá đơn vị.</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Bảng tự đánh giá chấm điểm các đơn vị</h3>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nội dung đánh giá</th>
                                <th>Điểm tối đa</th>
                                <th>Điểm đạt</th>
                            </tr>
                            </thead>
                            <?php $count = 1; $name=1;?>
                            <form id="" class="form-horizontal" action="{{url('donvi/setsession')}}" method="POST">
                                {{csrf_field()}}
                            <tbody>
                                @foreach($criterias_faculty as $criteria_faculty)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$criteria_faculty->name}}</td>
                                        <td>{{$criteria_faculty->i1}}</td>
                                        <td><input type="number" class="form-control" name="scores[]" placeholder="" value="{{$criteria_faculty->i1}}" min="0" max="{{$criteria_faculty->i1}}"></td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <button type="submit" class="btn btn-success">Lưu điểm</button>
                            </form>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2020 &copy; Admin  </footer>
</div>
@endsection
