@extends("admin.master")
@section('title','Quản lí thông tin Khoa')
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
                    <li class="active">Quản lí thông tin Khoa</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Quản lí thông tin Khoa trực thuộc.</h3>
                    <span><a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Thêm Admin</a></span>
                    <span><a href ="{{ route('export') }}" class="btn btn-success"><i class="fa fa-file-excel-o"></i></a></span>
                    <div id="tablecontent" class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Ảnh</th>
                                <th>Tên Khoa</th>
                                <th>Email</th>
                                <th>Điểm tự đánh giá</th>
                                <th>Xếp loại</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $count = 1 ?>
                            @foreach($admins as $admin)
                                <tr>
                                    <td>{{$count++}}</td>
                                    <td><img src="{{asset("public/images/".$admin->image)}}" alt="user" class="img-circle" width="40px"></td>
                                    <td>{{$admin->name}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>{{$admin->sum}}</td>
                                    <td>{{$admin->disgest}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        {{ $admins->links() }}
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
