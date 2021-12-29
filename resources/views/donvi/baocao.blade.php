@extends("donvi.master")
@section("content")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Điểm đánh giá công chức, viên chức</h3>
                    <div class="table-responsive">
                        <table id="datatables-buttons" class="table ">
                            <thead>
                            <tr>
                                <th>Họ và tên</th>
                                <th>Bộ môn</th>
                                <th>Điểm trung bình</th>
                                <th>Phân loại</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($totals as $total)
                                <tr>
                                    <td>{{$total->name}}</td>
                                    <td>{{$total->bomon}}</td>
                                    <td>{{$total->avg}}</td>
                                    <td>{{$total->disgest}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
</div>
</body>
</html>
@endsection
        <!-- /row -->

<!-- /#page-wrapper -->

