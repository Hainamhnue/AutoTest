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
                    <h3>Bảng điểm vi phạm</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nội dung vi phạm</th>
                                    <th>Điểm trừ tối đa</th>
                                    <th>Điểm trừ</th>
                                </tr>
                                </thead>
                                <?php $count = 1; ?>
                                <form  class="frmAddTask form-horizontal" action="" method="POST">

                                <tbody>
                                {{csrf_field()}}
                                @foreach($criterias_user_trans as $criteria_user_trans)
                                    <tr>
                                            <td>{{$count++}}</td>
                                            <td>{{$criteria_user_trans->name}}</td>
                                            <td>{{$criteria_user_trans->i1}}</td>
                                            <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="0" min="-{{$criteria_user_trans->i1}}" max="0" name="vipham[]"></td
                                    </tr>
                                @endforeach
                                </tbody>
                                <td><button type="submit" class="btn btn-success">Hoàn Thành</button></td>
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
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript">
    $(".frmAddTask").on('submit', function (event) {
        event.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
            type: 'POST',
            url: '/save-diem',
            data: formdata,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $.toast({
                    heading: 'Thông báo',
                    text: data.message,
                    position: 'top-right',
                    loaderBg: data.type,
                    icon: 'bell',
                    hideAfter: 5000,
                    stack: 6
                });
                table.ajax.reload();
            },
        });
    });
</script>
<!-- /#page-wrapper -->
@endsection

