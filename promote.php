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
          <div class="card-header bg-white">
            <h5 class="text-center">ลงโฆษณากับเรา</h5>
          </div>
          <div class="card-body">
            <form action="" method="post">
              <div class="mb-3">
                <label for="">เนื้อหา</label>
                <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="เนื้อหาของโฆษณา"></textarea>
              </div>
              <div class="mb-3">
                <label for="">ลิงก์โฆษณา</label>
                <input type="text" name="" id="" class="form-control" placeholder="https://..">
              </div>
              <div class="mb-3 input-group">
                <label for="image" class="input-group-text">รูปโฆษณา</label>
                <input type="file" name="" id="image" class="form-control">
              </div>
              <div class="mb-3">
                <label for="">งบในการโฆษณา (บาท)</label>
                <input type="number" name="" id="cal_ad" class="form-control">
              </div>
              <div class="mb-4">
                <label for=""><small class="text-danger">*หัก 10 สตางค์ ต่อการมองเห็น 1 ครั้ง</small></label>
                <input type="text" readonly value="" name="" id="result_cal_ad" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary col-12">ลงโฆษณา</button>
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
      $('.active-menu a.promote').addClass('active');
      $('.active-header').text('โปรโมท');

      $('#cal_ad').keyup(function() {
        let value = $(this).val();
        let result = value*10
        $('#result_cal_ad').val('โฆษณาจะแสดง : '+result+ ' ครั้ง')
      })
    })
  </script>
</body>

</html>