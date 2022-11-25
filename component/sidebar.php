<div class="col-3 d-none d-md-block  ">
  <h4 class="active-header">หน้าแรก</h4>
  <div class="active-menu mt-3 d-grid position-sticky" style="top:20px">
    <a href="#" class="btn btn-primary col-12 mb-2" data-bs-toggle="modal" data-bs-target="#modal_create">
      + สร้างโพสต์
    </a>
    <a href="my_profile.php?id=" class="d-flex align-items-center rounded-f py-2 px-1 mb-1 my_profile">
      <img src="img/avatar/1.png" alt="" class="rounded-circle border me-2" width="30" height="30">
      <h6>Kong Nontawat</h6>
    </a>
    <a href="search.php" class="d-flex align-items-center rounded-f py-2 px-1 mb-1 search">
      <img src="icon1/search.png" alt="" class="me-2" width="30" height="30">
      <h6>ค้นหา</h6>
    </a>
    <a href="category.php" class="d-flex align-items-center rounded-f py-2 px-1 mb-1 category">
      <img src="icon1/room.png" alt="" class="me-2" width="30" height="30">
      <h6>เลือกห้อง</h6>
    </a>
    <a href="activity.php" class="d-flex align-items-center rounded-f py-2 px-1 mb-1 activity">
      <img src="icon1/megaphone.png" alt="" class="me-2" width="30" height="30">
      <h6>ประชาสัมพันธ์</h6>
    </a>
    <a href="ques.php" class="d-flex align-items-center rounded-f py-2 px-1 mb-1 ques">
      <img src="icon1/ques.png" alt="" class="me-2" width="30" height="30">
      <h6>แบบประเมิน</h6>
    </a>
    <a href="promote.php" class="d-flex align-items-center rounded-f py-2 px-1 mb-1 promote">
      <img src="icon1/promote.png" alt="" class="me-2" width="30" height="30">
      <h6>โปรโมท</h6>
    </a>
  <h5 class="my-2">ความสนใจของคุณ</h5>
    <a href="" class="d-flex align-items-center mb-2 ms-2" >
      <p class="h6 text-primary">#รักสุขภาพ</p>
    </a>
    <a href="" class="d-flex align-items-center mb-2 ms-2">
      <p class="h6 text-primary">#เบาหวาน</p>
    </a>
    <a href="" class="d-flex align-items-center mb-2 ms-2">
      <p class="h6 text-primary">#ความดัน</p>
    </a>
  </div>
  <div class="modal fade" id="modal_create">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5>+ สร้างโพสต์</h5>
          <button class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <textarea name="" id="" cols="30" rows="3" class="form-control mb-3" placeholder="แบ่งปันเรื่องราว"></textarea>
            <select name="" id="" class="form-select mb-3">
              <option value="" disabled selected>-- เลือกหมวดหมู่ --</option>
            </select>
            <div class="input-group mb-3">
              <label for="" class="input-group-text">รูปภาพ</label>
              <input type="file" name="" id="" class="form-control">
            </div>
            <div class="input-group mb-4">
              <label for="" class="input-group-text">วีดีโอ</label>
              <input type="file" name="" id="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-lg col-12">สร้างโพสต์</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Left Content -->