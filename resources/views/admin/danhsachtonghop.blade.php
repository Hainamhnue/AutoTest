@extends("donvi.master")
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
                    <li class="active">Danh sách tổng hợp.</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Danh sách tổng hợp, xếp loại đơn vị, công chức, viên chức</h3>
                    <span><button type="button" class="btn btn-success"><i class="fa fa-file-excel-o"></i></button></span>
                    <form action="" method="post">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Đơn vi,Họ và tên</th>
                                    <th>Chức danh, chức vụ.</th>
                                    <th>Hoàn thành xuất sắc nhiệm vụ.</th>
                                    <th>Hoàn thành tốt nhiệm vụ.</th>
                                    <th>Hoàn thành nhiệm vụ.</th>
                                    <th>Không hoàn thành nhiệm vụ</th>
                                    <th>Ghi chú.</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><b>I</b></td>
                                    <td><b>Bộ môn CNPM.</b></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Nguyễn Thị A</td>
                                    <td>Giảng viên</td>
                                    <td>X</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Trần Văn B</td>
                                    <td>Trưởng khoa</td>
                                    <td>X</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><b>II</b></td>
                                    <td><b>Bộ môn KHMT.</b></td>
                                </tr>
                                <tr>
                                    <td><b>III</b></td>
                                    <td><b>Bộ môn HTTT.</b></td>
                                </tr>
                                <tr>
                                    <td><b>IV</b></td>
                                    <td><b>Bộ môn KTMT.</b></td>
                                </tr>
                                <tr>
                                    <td><b>V</b></td>
                                    <td><b>Bộ môn PPGD.</b></td>
                                </tr>
                                <tr>
                                    <td><b>VI</b></td>
                                    <td><b>Hành chính.</b></td>
                                </tr>



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
<!-- /#page-wrapper -->
@endsection
