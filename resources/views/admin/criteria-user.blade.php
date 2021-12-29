@extends("admin.master")
@section('title','Quản lí tiêu chí đánh giá CCVC')
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
                        <li class="active">Quản lí tiêu chí đánh giá CC,VC</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Quản lí tiêu chí đánh giá CC,VC</h3>
                        <span><a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></a></span>
                        <span><a href ="" class="btn btn-success"><i class="fa fa-file-excel-o"></i></a></span>
                        <div id="tablecontent" class="table-responsive" style="margin-top: 25px;">
                            <table id="datatables-buttons" class="table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên tiêu chí</th>
                                    <th>Điểm tối đa</th>
                                    <th>Là tiêu chí vi phạm</th>
                                    <th>Ngày tạo</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        @include('admin.update-faculty')
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm tiêu chí đánh giá</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="frmAddTask" class="form-horizontal form-material">
                            @csrf
                            <div class="form-group">
                                <label for="validationServer01">Tên tiêu chí:</label>
                                <input type="text" class="form-control is-valid" name="name" id="validationServer01" value="" placeholder="Thực hiện đúng nội quy" required>
                            </div>
                            <div class="form-group">
                                <label for="validationServer02">Điểm tối đa:</label>
                                <input type="number" class="form-control is-valid" name="i1" id="validationServer02" placeholder="10" value="" required>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name = "i2" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1" >Là tiêu chí vi phạm?</label>
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
                        <button type="button" class="btnDelete btn btn-danger" data-dismiss="modal">Có</button>
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
                url: "criteria-user/show"
            },
            columns: [
                { data: null},
                { data: "name" },
                { data: "i1" },
                {
                    data:null,
                    render:function (data,type,row) {
                        p ='';
                       if((data.i2) == 1){
                           p = '<i class="fa fa-check-circle" style="color: green"></i>';
                        }
                       return p;
                    }
                },
                { data: "created_at" },
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
                type: 'POST',
                url: '/admin/criteria-user',
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
                url: "criteria-user/edit/" + id,
                success: function(result){
                    $("#id").val(id);
                    $("#name").val(result.data.name);
                    $("#i1").val(result.data.i1);
                    $("#i2").val(result.data.i2);
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
                url: 'criteria-user/update',
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
                url: "criteria-user/destroy/"+this.id,
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
