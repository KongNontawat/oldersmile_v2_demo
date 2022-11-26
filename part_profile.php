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
            <img src="img/avatar/3.png" alt="" class="rounded-circle" width="150" height="150">
            <h5 class="my-2">John doe<img src="icon1/verify.png" alt="" class="ms-1" width="15" height="15"></h5>
            <p class="my-1">Partner</p>
            <p class="my-1">(นาย จอร์น โดย์)</p>
            <p class="text-start text-indent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam veritatis architecto mollitia cupiditate beatae sed quo maxime vero ut blanditiis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, voluptates repellendus suscipit ex earum labore ut pariatur eius nihil quaerat.</p>

            <p>0 : โพสต์</p>
            <p><img src="icon1/money.png" alt="" class="ms-1" width="30" height="30"> : 20,000 บาท</p>

            <h6 class="mt-4">ความเชี่ยวชาญ</h6>
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
            <p class="text-indent text-o-3">dignissimos. adipisicing elit. Tenetur quod ut, ipsum voluptate eligendi voluptas ab iure magnam sint. Doloremque?</p>
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
        </div>

        <div class="card mb-3">
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

      </div><!-- End Center Content -->

      <!-- Right Content -->
      <?php include('component/aside.php') ?>

    </div>
  </div>

  <div class="modal fade" id="modal_partner">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5>สมัครเป็นพาร์ทเนอร์</h5>
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
            <button type="submit" class="btn btn-primary btn-lg col-12">สมัคร</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal_market">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5>สมัครเป็นผู้ค้า</h5>
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
            <button type="submit" class="btn btn-primary btn-lg col-12">สมัคร</button>
          </form>
        </div>
      </div>
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
      // $('.active-menu a.my_profile').addClass('active');
      $('.active-header').text('โปรไฟล์');
    })
  </script>
</body>

</html>