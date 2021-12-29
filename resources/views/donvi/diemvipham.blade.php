@extends("donvi.master")
@section("content");
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
                    <h3>Bảng điểm vi phạm</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nội dung vi phạm</th>
                                    <th>Điểm trừ tối đa</th>
                                    <th>Điểm trừ</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <?php $count = 1; ?>
                                <form class="frmAddTask form-horizontal" method="POST">
                                    <tbody>
                                @foreach($criterias_trans as $criteria_trans)
                                    <tr>
                                            {{csrf_field()}}
                                            <td>{{$count++}}</td>
                                            <td>{{$criteria_trans->name}}</td>
                                            <td>{{$criteria_trans->i1}}</td>
                                            <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder="" value="0" min="-{{$criteria_trans->i1}}" max="0" name="vipham[]"></td>
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

<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript">
    $(".frmAddTask").on('submit', function (event) {
        var id = this.id;
        event.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
            type: 'POST',
            url: 'donvi/setsession1',
            data: formdata,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $.toast({
                    heading: 'Thông báo',
                    text: data.message,
                    position: 'bottom-right',
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
