@extends("admin.master")
@section('title','Quản lí thông tin Khoa')
@section("content")
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
                        <span><a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></a></span>
                        <span><a href ="" class="btn btn-success"><i class="fa fa-file-excel-o"></i></a></span>
                        <div id="tablecontent" class="table-responsive" style="margin-top: 25px;">
                            <table id="datatables-buttons"class="table" >
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Ảnh</th>
                                    <th>Tên Khoa</th>
                                    <th>Email</th>
{{--                                    <th>Điểm tự đánh giá</th>--}}
{{--                                    <th>Xếp loại</th>--}}
                                    <th></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm Quản Trị Khoa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="frmAddTask" class="form-horizontal form-material" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="validationServer01">Tên Khoa:</label>
                                <input type="text" class="form-control is-valid" id="validationServer01" value="" placeholder="VD: Công Nghệ Thông Tin" required name="name">
                            </div>
                            <div class="form-group">
                                <label for="validationServer02">Email:</label>
                                <input type="email" class="form-control is-valid" id="validationServer02" placeholder="VD: infor@gmail.com" value="" required name="email">
                            </div>
                            <div class="form-group">
                                <label for="validationServer03">Ảnh đại diện:</label>
                                <input type="file" class="form-control is-valid" id="validationServer03" required name="img">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Lưu</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- ---- Confirm Edit ----- --}}

        <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel2">Sửa thông tin Khoa</h4>
                    </div>

                    <div class="modal-body">
                        <form id="frmEditTask" class="form-horizontal form-material">
                            @csrf
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="validationServer01">Tên Khoa:</label>
                                <input type="text" class="form-control is-valid" id="name" name="name" value="" placeholder="VD: Công Nghệ Thông Tin" required>
                            </div>
                            <div class="form-group">
                                <label for="validationServer02">Email:</label>
                                <input type="email" class="form-control is-valid" id="email" name="email" placeholder="Example@gmail.com" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="validationServer03">Ảnh đại diện:</label>
                                <input type="file" class="form-control is-valid" id="validationServer03" required name="img" id="img">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div><!-- modal-content -->
            </div><!-- modal-dialog -->
        </div><!-- modal -->

        {{-- ---- Confirm Delete ----- --}}
        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        Xác nhận trước khi xóa
                    </div>
                    <div class="modal-body">
                        Bạn chắc chắn muốn xóa dữ liệu này ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                        <a class="btnDelete btn btn-danger">Có</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2020 &copy; Admin  </footer>
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
                url: "quan-li/show"
            },
            columns: [
                { data: null},
                {
                    data: null,
                    render:function (data,type,row) {
                        img = '';
                        img = '<img src="{{asset('public/images/')}}/'+data.img+'" alt="user" class="img-circle" width="50px">';
                        return img;
                    }
                },
                {
                    data:null,
                    render:function (data, type, row) {
                        a = '';
                        a = '<a href="{{url('admin/quan-li/scorestable/')}}/'+data.id+'">'+data.name+'</a>';
                        return a;

                    }
                },
                {data:"email"},
                {
                    data: null,
                    render: function ( data, type, row ){
                        btn =  '<a href="" class="btnEdit btn btn-primary" data-toggle="modal" data-target="#myModal2" id ="'+data.id+'"><i class="fa fa-pencil"></i></a>'
                            + '<a href="#deleteModal" class="btnDelete btn btn-danger" rel="" id ="'+data.id+'" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>';

                        return btn;
                    }
                },
            ]
        });
        // Index colum
        table.on('order.dt search.dt', function () {
            table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();

        $("#frmAddTask").on('submit', function (event) {
            event.preventDefault();
            var formdata = new FormData(this);
            $.ajax({
                type:'POST',
                url:'quan-li/store',
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
                    $('#frmAddTask')[0].reset();
                    table.ajax.reload();
                },
            });
        });
        $("#datatables-buttons tbody").on('click','td .btnEdit',function(){
            var id = this.id;
            $.ajax({
                url: "quan-li/edit/" + id,
                success: function(result){
                    $("#id").val(id);
                    $("#name").val(result.data.name);
                    $("#email").val(result.data.email);
                    $("#img").val(result.data.img);
                },
                error: function (request, status, error) {
                    alert(request.responseText);
                }
            });
        });
        $("#frmEditTask").on('submit', function (event) {
            event.preventDefault();
            var formdata = new FormData(this);
            $.ajax({
                type: 'POST',
                url: 'quan-li/update',
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
                    $('#myModal2').modal('hide');
                    table.ajax.reload();
                },

            });
        });
        // Delete Blog Article
        $("#datatables-buttons tbody").on('click','td .btnDelete',function(){
            var id = this.id;
            $(".btnDelete").attr("id",id);
        });
        $(".btnDelete").on("click",function(){
            $.ajax({
                url:"quan-li/destroy/"+this.id,
                success: function (data){
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
                error: function (request, status, error) {
                    alert(request.responseText);
                }
            });
        });
    </script>
    <!-- /#page-wrapper -->
@endsection
