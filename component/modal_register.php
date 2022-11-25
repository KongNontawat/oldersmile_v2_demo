<div class="modal fade" id="modal_register">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5>สมัครสมาชิก</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="mb-3">
            <label for="">ชื่อผู้ใช้ :</label>
            <input type="text" name="user_name" id="" class="form-control">
          </div>
          <div class="mb-3">
            <label for="">ชื่อ - สกุล :</label>
            <input type="text" name="user_fname" id="" class="form-control">
          </div>
          <div class="mb-3">
              เพศ : <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="user_gender" id="inlineRadio1" value="ชาย">
              <label class="form-check-label" for="inlineRadio1">ชาย</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="user_gender" id="inlineRadio2" value="หญิง">
              <label class="form-check-label" for="inlineRadio2">หญิง</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="">เกิดวันที่ :</label>
            <input type="date" name="user_dob" id="" class="form-control">
          </div>
          <div class="mb-3">
            <label for="">เบอร์โทร :</label>
            <input type="tel" name="user_tel" id="" class="form-control">
          </div>
          <div class="mb-3">
            <label for="">รหัสผ่าน :</label>
            <input type="password" name="user_pass" id="" class="form-control">
          </div>
          <div class="mb-3">
            <label for="">ยืนยันรหัสผ่าน :</label>
            <input type="password" name="user_pass2" id="" class="form-control">
          </div>
          <div class="input-group mb-3">
            <label class="input-group-text" for="image">รูปโปรไฟล์</label>
            <input type="file" class="form-control" name="user_image" id="image">
          </div>
          <button type="submit" class="btn btn-primary btn-lg col-12">สมัครสมาชิก</button>
          <button type="button"  data-bs-target="#modal_login" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-link col-12 mt-3">เข้าสู่ระบบ</button>
        </form>
      </div>
    </div>
  </div>
</div>