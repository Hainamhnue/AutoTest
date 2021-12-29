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
                    <h3 class="box-title">Phiếu tự đánh giá chấm điểm cho viên chức quản lí</h3>
                    <form action="" method="post">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nội dung đánh giá</th>
                                    <th>Điểm tối đa</th>
                                    <th>Điểm đạt</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>I</td>
                                    <td>Chấp hành đường lối, chủ trương của Đảng, chính sách pháp luật của Nhà nước. </td>
                                    <td>10</td>
                                    <td></td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Học tập, nghiên cứu và thực hiện theo những nội dung đường lối, chủ trương của Đảng.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Nâng cao trình độ hiểu biết pháp luật, tìm hiểu và thực hiện theo pháp luật, các văn bản quy định của cơ quan Nhà nước</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>II</td>
                                    <td>Phẩm chất chính trị, đạo đức. lối sống.</td>
                                    <td>10</td>
                                    <td></td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Không vi phạm đạo đức lối sống</td>
                                    <td>2</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Chống quan liêu, tham nhũng, lãng phí và những biểu hiện tiêu cực khác.</td>
                                    <td>2</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Đoàn kết nội bộ, giúp đỡ lẫn nhau.</td>
                                    <td>2</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Thực hiện tốt qui định nơi cứ trú.</td>
                                    <td>2</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Trung thực trong công việc.</td>
                                    <td>2</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>III</td>
                                    <td>Ý thức tổ chức kỉ luật, tác phong và lề lối làm việc.</td>
                                    <td>20</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Thực hiên nghiêm chỉnh nôi quy, quy chế Nhà trường.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>


                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Phối hợp công tác với đồng nghiệp, các đơn vị liên quan(trong và ngoài Nhà trường)</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>


                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tinh thần thái độ phục vụ: tận tụy, lịch sự, hòa nhã,...</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>


                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Có đóng góp cho công việc chung.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>


                                </tr>
                                <tr>
                                    <td>IV.A</td>
                                    <td>Kết quả thực hiện nhiệm vụ chuyên môn của chuyên viên và tường đương.</td>
                                    <td>40</td>
                                    <td></td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Những văn bản đã chủ trì, tham gia soạn thảo, công việc được giao(số lượng, chất lượng, kết quả).</td>
                                    <td>20</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Tổ chức thực hiện: hướng dẫn, theo dõi, đôn đốc, kiểm tra và đề xuất các biện pháp nhằm triển khai các công việc được giao.</td>
                                    <td>15</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tiến độ hoàn thành công việc được giao.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>IV.B</td>
                                    <td>Kết quả thực hiện nhiệm vụ chuyên môn của giảng viên: </td>
                                    <td>40</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Đảm bảo chất lượng, khối lượng giảng dạy và thực hiện các công việc giảng dạy theo quy định, quy chế.</td>
                                    <td>20</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kết quả thực hiện các nhiệm vụ nghiên cứu khoa học và chuyển giao công nghệ.</td>
                                    <td>15</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Kết quả thực hiện các nhiệm vụ khác được giao như: công tác tuyển sinh, cố vấn học tập,..</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>IV.C</td>
                                    <td>Kết quả thực hiện nhiệm vụ chuyên môn của giáo viên thực hành.</td>
                                    <td>40</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Đảm bảo khối lượng, chất lượng hướng dẫn thực hành các công việc liên quan đến qui định, qui chế.</td>
                                    <td>30</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kết quả thực hiện các nhiệm vụ khác được giao như: công tác tuyển sinh, rèn luyện sinh viên,...</td>
                                    <td>10</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>IV.D</td>
                                    <td>Kết quả thực hiện chuyên môn của nghiên cứu viên</td>
                                    <td>40</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Kết quả thực hiện nhiệm vụ NCKH và công bố khoa học.</td>
                                    <td>20</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kết quả thực hiện công tác, bồi dưỡng.</td>
                                    <td>10</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Kết quả thực hiện nhiệm vụ khác như: thực tế cơ sở, công tác tuyển sinh,..</td>
                                    <td>10</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>IV.E</td>
                                    <td>Kết quả thực hiện nhiệm vụ chuyên môn của nhân viên, cán sự, kĩ thuật viên.</td>
                                    <td>40</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Kết quả thực hiện công việc theo vị trí công việc và phân công(số lượng, chất lượng).</td>
                                    <td>20</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Công tác đảm bảo cơ sở vật chất, bảo quản phương tiện và trang thiết bị làm việc.</td>
                                    <td>10</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Thực hiện các nhiệm vụ đột xuất, các nhiệm vụ khác.</td>
                                    <td>10</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>V</td>
                                    <td>Đánh giá về kết quả công tác quản lí.</td>
                                    <td>20</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Năng lực lãnh đạo, quản lí, điều hành và tổ chức các nhiệm vụ.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kết quả hoạt động được giao quản lí, phụ trách</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tinh thần hợp tác với đơn vị bạn và sự tín nhiệm của mọi người.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Thực hiện nghiêm túc chế độ hội họp, chế độ thông tin, báo cáo, xử lí công việc theo tiến độ Nhà trường.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>


                                </tbody>
                            </table>

                            <button type="button" class="btn btn-success">Hoàn thành</button>

                        </div>
                    </form>
                    <h3>Bảng điểm vi phạm</h3>
                    <form action="post">
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
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Gây mất đoàn kết.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Vi phạm trong sử dụng các thiết bị điện, nước vệ sinh môi trường.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Thiếu trung thực trong công việc.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Đến làm việc muôn, về sớm trước 15 phút.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Vắng mặt bỏ vị trí làm việc không có lí do.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Không dự họp không có lí do.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Thực hiện nhiệm vụ chậm tiến độ.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Vi phạm quy chế đào tạo.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Gây mất quy định, trị an trong Nhà trường.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Không tích cực trong phối hợp với đồng nghiệp.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Thái độ phục vụ thiếu lịch sự, không hòa nhã.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Chậm thanh quyết toán từ 15 ngày trở lên.</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Không kiểm tra theo dõi việc thực hiện các văn bản, quy định đã ban hành</td>
                                    <td>5</td>
                                    <td><input type="number" class="form-control" id="formGroupExampleInput" placeholder=""></td>
                                </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success">Hoàn thành</button>
                        </div>


                    </form>

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

