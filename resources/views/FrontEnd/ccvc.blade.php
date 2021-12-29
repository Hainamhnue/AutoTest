@extends("frontend.master")
@section("content");
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"></h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <!-- <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> -->
                <ol class="breadcrumb">
                    <li class="active">Tự đánh giá.</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Phiếu tự đánh giá chấm điểm cho công chức, viên chức.</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nội dung đánh giá</th>
                                    <th>Điểm tối đa</th>
                                    <th>Điểm đạt</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <form class="frmAddTask form-horizontal" action="{{url('user/setdiem')}}"  method="POST">
                                    {{csrf_field()}}
                                <tbody>
                                <?php $count = 1; ?>
                                @foreach($criterias_user as $criteria_user)
                                    <tr>
                                            <td>{{$count++}}</td>
                                            <td>{{$criteria_user->name}}</td>
                                            <td>{{$criteria_user->i1}}</td>
                                            <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="{{$criteria_user->i1}}" min="0" max="{{$criteria_user->i1}}" name="scores[]"></td
                                    </tr>
                                    @endforeach
                                </tbody>
                                    <td><button type="submit"  class="btn btn-success">Tiếp tục</button></td>
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
<!-- /#page-wrapper -->
@endsection

