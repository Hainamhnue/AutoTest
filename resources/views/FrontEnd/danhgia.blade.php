@extends("FrontEnd.master")
@section('title','Quản lí điểm CC,VC')
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
                        <li class="active">Quản lí thông tin CC,VC</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Quản lí điểm CCVC</h3>
                        <div id="tablecontent" class="table-responsive" style="margin-top: 25px;">
                            <table id="datatables-buttons" class="table" >
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ và tên</th>
                                    <th>Điểm khoa đánh giá</th>
                                    <th>Điểm tự đánh giá</th>
                                    <th>Điểm trung bình</th>
                                    <th>Xếp loại</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count = 1 ?>
                                @foreach($shows as $show)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$show->name}}</td>
                                        <td>{{$show->sum_f}}</td>
                                        <td>{{$show->sum}}</td>
                                        <td>{{$show->avg}}</td>
                                        <td>{{$show->disgest}}</td>
                                        <td>
                                            <a href="" class="btn btn-infor" rel="" ><i class="fa fa-pencil"></i></a>
                                            <a href="#deleteModal" class="btnDeletee btn btn-danger" rel="" id="{{$show->id}}" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
                                        </td>
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
                        <a class="btnDelete btn btn-danger btn-ok">Có</a>
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
        // Delete Blog Article
        $("#datatables-buttons tbody").on('click','td .btnDeletee',function(){
            var id = this.id;
            $(".btnDelete").attr("id",id);
        });
        $(".btnDelete").on("click",function(){
            $.ajax({
                url:"score-table/destroy/"+this.id,
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
