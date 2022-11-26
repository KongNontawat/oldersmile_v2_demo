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
          <div class="card-header bg-white text-center"><h5>แบบประเมิน</h5></div>
          <div class="card-body">
            <form action="ques_proc/ques_add_proc.php" method="post" enctype="multipart/form-data">

              <div class="mb-3">
                <h6 class="mb-2">Lorem ipsum dolor sit amet.</h6>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="5" name="ques_answer" id="5_">
                  <label class="form-check-label" for="5_">
                    มากที่สุด
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="4" name="ques_answer" id="4_">
                  <label class="form-check-label" for="4_">
                    มาก
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="3" name="ques_answer" id="3_">
                  <label class="form-check-label" for="3_">
                    ปานกลาง
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="2" name="ques_answer" id="2_">
                  <label class="form-check-label" for="2_">
                    น้อย
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="1" name="ques_answer" id="1_">
                  <label class="form-check-label" for="1_">
                    น้อยที่สุด
                  </label>
                </div>
                <hr>
              </div>

              <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary col-12">บันทึกข้อมูล</button>
                <a href="#!" onclick="window.history.back()" class="btn text-decoration-underline btn-link mt-2">ยกเลิก</a>
              </div>
            </form>
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
      $('.active-menu a.ques').addClass('active');
      $('.active-header').text('แบบประเมิน');
    })
  </script>
</body>

</html>