@extends("donvi.master")
@section("content")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <!-- <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> -->
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- row -->
        <div class="row">
            <!--col -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="white-box">
                    <div class="col-in row">
                        <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                            <h5 class="text-muted vb">Tổng số cán bộ, viên chức</h5> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-danger">{{$count}}</h3> </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">40% Complete (success)</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!--col -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="white-box">
                    <div class="col-in row">
                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                            <h5 class="text-muted vb">Điểm đơn vị.</h5> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            @foreach($count1 as $count)
                            <h3 class="counter text-right m-t-15 text-megna">{{$count->sum}}</h3>
                            @endforeach
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> <span class="sr-only">90% Complete (success)</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!--col -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="white-box">
                    <div class="col-in row">
                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                            <h5 class="text-muted vb">Cán bộ, viên chức hoàn thành tốt nhiệm vụ.</h5>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-success">8</h3>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (success)</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!--row -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">Thống kê điểm công chức, viên chức qua các kì</h3>
                    <div id="morris-area-chart2" style="height: 370px;"></div>
                </div>
            </div>
        </div>
        <!--row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Điểm đánh giá công chức, viên chức</h3>
                    <div class="table-responsive">
                        <table id="datatables-buttons" class="table ">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ảnh</th>
                                <th>Họ và tên</th>
                                <th>Bộ môn</th>
                                <th>Điểm trung bình</th>
                                <th>Phân loại</th>
                            </tr>
                            </thead>
                        </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2020 &copy; Admin </footer>
</div>
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/datatables.js') }}"></script>
<script type="text/javascript">
    var table = $("#datatables-buttons").DataTable({
        responsive: true,
        language: {
            url: "{{ asset('json/Vietnamese.json') }}",
        },
        ajax: {
            url: "donvi/show-user-home"
        },
        columns: [
            { data: null},
            {
                data: null,
                render: function (data,type,row) {
                    img = '';
                    img = '<img src="{{asset('public/images')}}/'+data.img+'" alt="user" class="img-circle" width="50px">';
                    return img;
                }
            },
            {data:"name"},
            {data:"bomon"},
            {
                data:null,
                render: function (data,type,row) {
                    span = '';
                    span = '<span class="text-danger"><b>'+data.avg+'</b></span>';
                    return span;}
            },
            {
                data:null,
                render: function (data,type,row) {
                    span = '';
                    span = '<span class="text-success"><b>'+data.disgest+'</b></span>';
                    return span;}
            },
        ]
    });
    // Index colum
    table.on('order.dt search.dt', function () {
        table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1;
        });
    }).draw();
</script>
<!-- /#page-wrapper -->
@endsection
