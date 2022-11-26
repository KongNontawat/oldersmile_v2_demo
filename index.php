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
        <div class="card mb-3" id="main_container1">
          <div class="card-header bg-white d-flex align-items-center justify-content-between">
            <a href="user_profile.php?id=" class="d-flex align-items-center">
              <img src="img/avatar/5.png" alt="" class="rounded-circle border me-2" width="45" height="45">
              <h6>zara inwzaa</h6>
            </a>
            <div class="dropdown">
              <a href="#" data-bs-toggle="dropdown"><img src="icon1/dot.png" width="25" height="25" alt="" ></a>
              <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="#" onclick="return confirm('คุณแน่ใจหรือไม่ที่จะลบโพสต์นี้')" class="text-danger">ลบโพสต์</a></li>
              </ul>
            </div>
          </div>
          <div class="card-body">
            <a href="post_detail.php"><p class="text-indent text-o-3">dignissimos. adipisicing elit. Tenetur quod ut, ipsum voluptate eligendi voluptas ab iure magnam sint. Doloremque?</p></a>
            <div class="d-flex align-items-center justify-content-between mt-2">
              <a href="#" class="text-primary">#category</a>
              <small class="text-muted">โพสต์เมื่อ : 13/10/2022</small>
            </div>
          </div>
          <div class="card-footer bg-white d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <a href="#" class="d-flex align-items-center me-3 me-lg-4">
                <img src="icon1/heart.png" width="25" height="25" class="me-1" >
                <span>50</span>
              </a>
              <a href="#" class="d-flex align-items-center">
                <img src="icon1/chat.png" width="25" height="25" class="me-1" >
                <span class="me-1">4</span>
              </a>
            </div>
            <small class="text-muted">รับชม : 3,124</small>
          </div>
          <script>
            window.addEventListener('scroll', function() {
            var el = document.querySelector('#main_container1');
            var pos = el.getBoundingClientRect();

            if(pos.top >= 0 && pos.bottom <= window.innerHeight) {
              console.log('post 1 : เห็น');
            }

            if(pos.top < window.innerHeight && pos.bottom >= 0) {
              console.log('post 1 : ไม่เห็น');
            }
            });
          </script>
        </div>

        <div class="card mb-3" id="main_container2">
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
          <a href="post_detail.php"><img src="https://t1.blockdit.com/photos/2022/11/6369d92af271a001ba829eb1_800x0xcover_n5mQOFEB.jpg" alt="" class="card-img-top"></a>
          <div class="card-body">
            <p class="text-indent text-o-3">Lorem ipsum dolor sit, amet consectetur Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam a neque aliquid aperiam nisi debitis ea sint asperiores animi dignissimos. adipisicing elit. Tenetur quod ut, ipsum voluptate eligendi voluptas ab iure magnam sint. Doloremque?</p>
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

        <div class="card mb-3" id="main_container3">
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

        <div class="card mb-3" id="main_container4">
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

        <div class="card mb-3" id="main_container5">
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
          <video controls autoplay muted>
            <source src="img/video_demo.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="card-body">
            <p class="text-indent text-o-3">ผู้ให้บริการสื่อโฆษณานอกบ้านที่มีความหลากหลายมากที่สุดในประเทศไทย พร้อมด้วยนวัตกรรม และคอนเทนต์คุณภาพ</p>
            <div class="d-flex align-items-center justify-content-between mt-2">
              <a href="#" class="text-primary">#category</a>
              <small class="text-muted">โพสต์เมื่อ : 10/10/2022</small>
            </div>
          </div>
          <div class="card-footer bg-white d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <a href="#" class="d-flex align-items-center me-3 me-lg-4">
                <img src="icon1/heart-fill.png" width="25" height="25" class="me-1" >
                <span> 2,394 </span>
              </a>
              <a href="#" class="d-flex align-items-center">
                <img src="icon1/chat.png" width="25" height="25" class="me-1" >
                <span class="me-1">24</span>
              </a>
            </div>
            <small class="text-muted">รับชม : 4,123</small>
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
      $('.active-menu a.home').addClass('active');
      $('.active-header').text('หน้าแรก');

    })

    // window.addEventListener('scroll', function() {
    // var el = document.querySelector('#main_container');
    // var pos = el.getBoundingClientRect();

    // if(pos.top >= 0 && pos.bottom <= window.innerHeight) {
    //   console.log('เห็น');
    // }

    // if(pos.top < window.innerHeight && pos.bottom >= 0) {
    //   console.log('ไม่เห็น');
    // }
    // });



  </script>
</body>

</html>