@extends("admin.master")
@section('title','Send Email')
@section("content")
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="white-box">
                    <form id="frmAddTask" class="form-horizontal form-material" action="" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="col-md-12">Nội dung: </label>
                            <div class="col-md-12">
                                <textarea rows="5" class="form-control form-control-line" required name="email"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>>
    </div>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/datatables.js') }}"></script>
    <script type="text/javascript">
        $("#frmAddTask").on('submit', function (event) {
            event.preventDefault();
            var formdata = new FormData(this);
            $.ajax({
                type:'POST',
                url:'/laravel-send-email',
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
    </script>
@endsection
