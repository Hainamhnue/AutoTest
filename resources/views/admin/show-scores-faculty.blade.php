@extends("admin.master")
@section('title','Điểm đơn vị tự đánh giá')
@section("content");
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"></h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <!-- <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> -->
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Điểm đơn vị tự đánh giá</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Điểm đơn vị tự đánh giá</h3>
                    <div id="tablecontent" class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Ảnh</th>
                                <th>Tên Khoa</th>
                                <th>Email</th>
                                <th>Điểm tự đánh giá</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $count = 1 ?>
                            @foreach($scores as $score)
                                <tr>
                                    <td>{{$count++}}</td>
                                    <td><img src="{{asset("public/images/".$score->img)}}" alt="user" class="img-circle" width="40px"></td>
                                    <td>{{$score->name}}</td>
                                    <td>{{$score->email}}</td>
                                    <td>{{$score->i1}}</td>
                                </tr>
                            @endforeach
                            </tbody>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">


</script>
<!-- /#page-wrapper -->
@endsection
