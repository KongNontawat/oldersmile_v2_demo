<div class="offcanvas offcanvas-start" id="offcanvas" data-bs-scroll="true">
  <div class="offcanvas-header">
      <a href="index.php" class="text-center">
        <h3 class="text-logo"><b>OlderSmile</b></h3>
      </a>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="active-menu d-grid">
      <a href="#" class="btn btn-primary col-12 mb-2" data-bs-dismiss="offcanvas" data-bs-toggle="modal" data-bs-target="#modal_create">
        + สร้างโพสต์
      </a>
      <a href="my_profile.php?id=" class="d-flex align-items-center rounded-f py-2 px-1 mb-1">
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
    </div>
  </div>
</div>
<?php include('modal_create.php') ?>
