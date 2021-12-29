
<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2">Sửa tiêu chí đánh giá</h4>
            </div>

            <div class="modal-body">
                <form id="frmEditTask" class="form-horizontal form-material">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="validationServer01">Tên tiêu chí:</label>
                        <input type="text" class="form-control is-valid" id="name" name="name" value="" placeholder="Thực hiện đúng nội quy" required>
                    </div>
                    <div class="form-group">
                        <label for="validationServer02">Điểm tối đa:</label>
                        <input type="number" class="form-control is-valid" id="i1" name="i1" placeholder="10" value="" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="i2" name = "i2" >
                        <label class="form-check-label" for="i2" >Là tiêu chí vi phạm?</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Lưu</button>
                    </div>
                </form>
            </div>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->
