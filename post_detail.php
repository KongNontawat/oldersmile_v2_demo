<?php
$ad_show = true;
?>
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
      <div class="col-md-6 pb-5">

        <!-- Banner -->
        <img src="img/banner1.jpg" alt="" class="rounded-f mb-3" width="100%">

        <!-- Card Post -->
        <div class="card">
          <div class="card-header bg-white d-flex align-items-center justify-content-between">
            <a href="user_profile.php?id=" class="d-flex align-items-center">
              <img src="img/avatar/3.png" alt="" class="rounded-circle border me-2" width="45" height="45">
              <h6>Kong nontawat</h6>
              <img src="icon1/verify.png" alt="" class="ms-1" width="15" height="15">
            </a>
            <div class="dropdown">
              <a href="#" data-bs-toggle="dropdown"><img src="icon1/dot.png" width="25" height="25" alt="" ></a>
              <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="#" onclick="return confirm('คุณแน่ใจหรือไม่ที่จะลบโพสต์นี้')" class="text-danger">ลบโพสต์</a></li>
              </ul>
            </div>
          </div>
          <img src="https://t1.blockdit.com/photos/2022/11/6369d92af271a001ba829eb1_800x0xcover_n5mQOFEB.jpg" alt="" class="card-img-top">
          <div class="card-body">
            <p class="text-indent">Lorem ipsum dolor sit, amet consectetur Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam a neque aliquid aperiam nisi debitis ea sint asperiores animi dignissimos. adipisicing elit. Tenetur quod ut, ipsum voluptate eligendi voluptas ab iure magnam sint. Doloremque?</p>
            <div class="d-flex align-items-center justify-content-between mt-2">
              <a href="#" class="text-primary">#category</a>
              <small class="text-muted">โพสต์เมื่อ : 11/10/2022</small>
            </div>
          </div>
          <div class="card-footer bg-white d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <a href="#" class="d-flex align-items-center me-3 me-lg-4">
                <img src="icon1/heart-fill.png" width="25" height="25" class="me-1" >
                <span> 5 </span>
              </a>
              <a href="#" class="d-flex align-items-center">
                <img src="icon1/chat.png" width="25" height="25" class="me-1" >
                <span class="me-1">5</span>
              </a>
            </div>
            <small class="text-muted">รับชม : 5,000</small>
          </div>
        </div>

        <div class="carousel slide" id="slide">
          <div class="carousel-inner">
            <div class="carousel-item active" >
              <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/hiring-ad-design-template-2b49f6ef77f87f29a8612d5314547c23_screen.jpg?ts=1616874293" alt="" class="d-block w-100">
            </div>
            <div class="carousel-item " >
              <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/job-vacancy-ad-design-template-902a7a742ef3ffcec77c16eb24045468_screen.jpg?ts=1619630085" alt="" class="d-block w-100">
            </div>
            <div class="carousel-item " >
              <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/job-hiring-twitter-post-design-template-28eb8b58fa7292695cbb90b92b2e663b_screen.jpg?ts=1662349214" alt="" class="d-block w-100">
            </div>
          </div>

          <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#slide">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#slide">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>

        <div class="card">
          <div class="card-body">
            <form action="" method="post">
              <div class="input-group">
                <img src="icon1/chat.png" class="me-2 mt-1" width="30" height="30">
                <input type="text" name="" id="" class="form-control" placeholder="แสดงความคิดเห็น">
                <button type="submit" class="btn btn-outline-primary">ส่ง</button>
              </div>
            </form>
          </div>
        </div>

        <ul class="list-group">
          <li class="list-group-item list-group-item-action">
            <a href="my_profile.php?id=" class="d-flex align-items-center rounded-f py-2 px-1 mb-1">
              <img src="img/avatar/1.png" alt="" class="rounded-circle border me-2" width="30" height="30">
              <h6>Kong Nontawat</h6>
              <small class="text-muted ms-2" style="font-size:12px">20/12/2022</small>
            </a>
            <p class='ms-2'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, atque?</p>
          </li>
          <li class="list-group-item list-group-item-action">
            <a href="my_profile.php?id=" class="d-flex align-items-center rounded-f py-2 px-1 mb-1">
              <img src="img/avatar/1.png" alt="" class="rounded-circle border me-2" width="30" height="30">
              <h6>Kong Nontawat</h6>
              <small class="text-muted ms-2" style="font-size:12px">20/12/2022</small>
            </a>
            <p class='ms-2'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, atque?</p>
          </li>
          <li class="list-group-item list-group-item-action">
            <a href="my_profile.php?id=" class="d-flex align-items-center rounded-f py-2 px-1 mb-1">
              <img src="img/avatar/1.png" alt="" class="rounded-circle border me-2" width="30" height="30">
              <h6>Kong Nontawat</h6>
              <small class="text-muted ms-2" style="font-size:12px">20/12/2022</small>
            </a>
            <p class='ms-2'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, atque?</p>
          </li>
        </ul>

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
      $('.active-menu a.home').addClass('active');
      $('.active-header').text('หน้าแรก');
    })
  </script>
</body>

</html>