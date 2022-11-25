<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/style.css">
  <title>OlderSmile</title>
</head>

<body>
  <!-- Navbar -->
  <?php include('component/navbar.php') ?>

  <!-- Canvas -->
  <?php include('component/canvas.php') ?>

  <!-- Content -->
  <div class="container">
    <div class="row gy-3 mt-2 justify-content-center">

      <!-- Sidebar -->
      <?php include('component/sidebar.php') ?>

      <!-- Center Content -->
      <div class="col-md-6">

        <!-- Banner -->
        <img src="img/banner1.jpg" alt="" class="rounded-f mb-3" width="100%">

        <!-- Card Post -->
        <div class="card mb-3">
          <div class="card-body text-center">
            <img src="img/avatar/2.png" alt="" class="rounded-circle" width="150" height="150">
            <h5 class="my-2">Inw zaa007</h5>
            <p class="my-1 text-muted">(นาย อธิวัฒน์ นางาม)</p>
            <small class="d-block text-muted">ชาย</small>
            <small class="my-1 text-muted">รหัสสมาชิก : 686745</small>

            <p>0 : โพสต์</p>

            <h6 class="mt-4">ความสนใจ</h6>
            <a href="">#เบาหวาน</a>
            <a href="">#ความดัน</a>
            <a href="">#รักสุขภาพ</a>

          </div>
        </div>

        <h5 class="my-3">โพสต์ของเขา</h5>

        <!-- Card Post -->
        <div class="card mb-3">
          <div class="card-header bg-white d-flex align-items-center justify-content-between">
            <a href="user_profile.php?id=" class="d-flex align-items-center">
              <img src="img/avatar/2.png" alt="" class="rounded-circle border me-2" width="45" height="45">
              <h6>John zaa</h6>
            </a>
            <div class="dropdown">
              <a href="#" data-bs-toggle="dropdown"><img src="icon1/dot.png" width="25" height="25" alt="" ></a>
              <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="#" onclick="return confirm('คุณแน่ใจหรือไม่ที่จะลบโพสต์นี้')" class="text-danger">ลบโพสต์</a></li>
              </ul>
            </div>
          </div>
          <div class="card-body">
            <p class="text-indent text-o-3">aperiam nisi debitis ea sint asperiores animi dignissimos. adipisicing elit. Tenetur quod ut, ipsum voluptate eligendi voluptas ab iure magnam sint. Doloremque?</p>
            <div class="d-flex align-items-center justify-content-between mt-2">
              <a href="#" class="text-primary">#category</a>
              <small class="text-muted">โพสต์เมื่อ : 11/10/2022</small>
            </div>
          </div>
          <div class="card-footer bg-white d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <a href="#" class="d-flex align-items-center me-3 me-lg-4">
                <img src="icon1/heart.png" width="25" height="25" class="me-1" >
                <span>20</span>
              </a>
              <a href="#" class="d-flex align-items-center">
                <img src="icon1/chat.png" width="25" height="25" class="me-1" >
                <span class="me-1">0</span>
              </a>
            </div>
            <small class="text-muted">รับชม : 2,466</small>
          </div>
        </div>



      </div><!-- End Center Content -->

      <!-- Right Content -->
      <?php include('component/aside.php') ?>

    </div>
  </div>

  <?php include('component/modal_login.php') ?>
  <?php include('component/modal_register.php') ?>


  <script src="jquery/jquery-3.6.1.min.js"></script>
  <script src="bootstrap/bootstrap.bundle.min.js"></script>
  <script src="js/base.js"></script>
  <script src="js/index.js"></script>
  <script>
    $(function () {
      // $('.active-menu a.my_profile').addClass('active');
      $('.active-header').text('โปรไฟล์');
    })
  </script>
</body>

</html>