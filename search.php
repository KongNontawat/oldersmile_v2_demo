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
        <div class="card mb-3 p-2 py-3">
          <form action="" method="get">
            <div class="input-group">
              <input type="text" name="" id="" class="form-control" placeholder="ค้นหา">
              <button type="submit" class="btn btn-outline-primary">ค้นหา</button>
            </div>
          </form>
        </div>

        <ul class="list-group">
          <li class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
            <a href="my_profile.php?id=" class="d-flex align-items-center rounded-f py-2 px-1 mb-1">
              <img src="img/avatar/1.png" alt="" class="rounded-circle border me-2" width="30" height="30">
              <h6>Kong Nontawat</h6>
            </a>
            <a href="#" class="btn btn-outline-primary btn-sm ">ดูโปรไฟล์</a>
          </li>
          <li class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
            <a href="my_profile.php?id=" class="d-flex align-items-center rounded-f py-2 px-1 mb-1">
              <img src="img/avatar/1.png" alt="" class="rounded-circle border me-2" width="30" height="30">
              <h6>Kong Nontawat</h6>
            </a>
            <a href="#" class="btn btn-outline-primary btn-sm ">ดูโปรไฟล์</a>
          </li>
          <li class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
            <a href="my_profile.php?id=" class="d-flex align-items-center rounded-f py-2 px-1 mb-1">
              <img src="img/avatar/1.png" alt="" class="rounded-circle border me-2" width="30" height="30">
              <h6>Kong Nontawat</h6>
            </a>
            <a href="#" class="btn btn-outline-primary btn-sm ">ดูโปรไฟล์</a>
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
  <script src="js/base.js"></script>
  <script src="js/index.js"></script>
  <script>
    $(function () {
      $('.active-menu a.search').addClass('active');
      $('.active-header').text('ค้นหา');

    })
  </script>
</body>

</html>