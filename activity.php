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
          <div class="card-header bg-white d-flex align-items-center justify-content-between">
            <a href="user_profile.php?id=" class="d-flex align-items-center">
              <img src="https://t1.blockdit.com/photos/2021/02/6018ff2d473f6227e0649a46_120x120xcover_6JtJp04Y.jpg" alt="" class="rounded-circle border me-2" width="45" height="45">
              <h6>Plan B Media นักการตลาดนอกบ้าน</h6>
            </a>
            <div class="dropdown">
              <a href="#" data-bs-toggle="dropdown"><img src="icon1/dot.png" width="25" height="25" alt="" ></a>
              <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="#" onclick="return confirm('คุณแน่ใจหรือไม่ที่จะลบโพสต์นี้')" class="text-danger">ลบโพสต์</a></li>
              </ul>
            </div>
          </div>
          <img src="https://t1.blockdit.com/photos/2021/02/6018ff39a2f65f0c80791c21_800x0xcover_P8G2yhwF.jpg" alt="" class="card-img-top">
          <div class="card-body">
            <p class="text-indent text-o-3">ผู้ให้บริการสื่อโฆษณานอกบ้านที่มีความหลากหลายมากที่สุดในประเทศไทย พร้อมด้วยนวัตกรรม และคอนเทนต์คุณภาพ</p>
            <div class="d-flex align-items-center justify-content-between mt-2">
              <a href="#" class="text-primary">#category</a>
              <small class="text-muted">โพสต์เมื่อ : 11/10/2022</small>
            </div>
          </div>
          <div class="card-footer bg-white d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <a href="#" class="d-flex align-items-center me-3 me-lg-4">
                <img src="icon1/heart-fill.png" width="25" height="25" class="me-1" >
                <span> 1,504 </span>
              </a>
              <a href="#" class="d-flex align-items-center">
                <img src="icon1/chat.png" width="25" height="25" class="me-1" >
                <span class="me-1">56</span>
              </a>
            </div>
            <small class="text-muted">รับชม : 5,443</small>
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="js/base.js"></script>
  <script src="js/index.js"></script>
  <script>
    $(function () {
      $('.active-menu a.activity').addClass('active');
      $('.active-header').text('ประชาสัมพันธ์');
    })
  </script>
</body>

</html>