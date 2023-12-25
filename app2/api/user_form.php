<!-- modal -->
<div class="modal fade" id="studentform" tabindex="-1" aria-labelledby="studentformLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="studentformlLabel">新增學生</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./api/insert.php" method="post" class="row">
                    <div class="mb-3 col-6">
                        <label for="name" class="form-label">姓名</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="school_num" class="form-label">學號</label>
                        <input type="text" class="form-control" name="school_num" id="school_num" placeholder="">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="birthday" class="form-label">生日</label>
                        <input type="date" class="form-control" name="birthday" id="birthday" placeholder="">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="uni_id" class="form-label">身分證字號</label>
                        <input type="text" class="form-control" name="uni_id" id="uni_id" placeholder="">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="addr" class="form-label">地址</label>
                        <input type="text" class="form-control" name="addr" id="addr" placeholder="">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="parents" class="form-label">家長</label>
                        <input type="text" class="form-control" name="parents" id="parents" placeholder="">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="tel" class="form-label">電話</label>
                        <input type="text" class="form-control" name="tel" id="tel" placeholder="">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="dept" class="form-label">科系</label>
                        <input type="text" class="form-control" name="dept" id="dept" placeholder="">
                    </div>
                    <div class='mb-3 col-6'>
                        <label for="schools" class="form-label">畢業國中</label>
                        <select id="schools" name="graduate_at" class="form-select" aria-label="Default select">

                        </select>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="status_code" class="form-label">畢業狀態</label>
                        <input type="text" class="form-control" name="status_code" id="status_code" placeholder="">
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary">確認新增</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>