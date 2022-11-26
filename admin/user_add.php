<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Older Smile</title>
</head>
<body>

    
    <!-- Main!!! -->
    <div class="main d-flex">

        <!-- Side Bar!!! -->
        <?php include('component/sidebar.php');?>
        
        <div class="content">
            
            <!-- Nav Bar!!! -->
            <?php include('component/navbar.php');?>


            <div class="content-body">

                <div class="container-fluid mt-3">

                    <div class="p-4 bg-white rounded-3 shadow-sm">

                        <!-- Breadcrumb!!! -->
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php">หน้าแรก</a></li>
                            <li class="breadcrumb-item"><a href="user_mng.php">จัดการสมาชิก</a></li>
                            <li class="breadcrumb-item active">เพิ่มสมาชิก</li>
                        </ol>

                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                            <h3>เพิ่มสมาชิก</h3>  
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-5">
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for=""><span class="text-danger">*</span>ชื่อผู้ใช้ :</label>
                                        <input type="text" name="user_name" id="" class="form-control" placeholder="โปรดกรอกชื่อผู้ใช้">
                                    </div>
                                    <div class="mb-3">
                                        <label for=""><span class="text-danger">*</span>ชื่อ - สกุล :</label>
                                        <input type="text" name="user_fname" id="" class="form-control" placeholder="โปรดกรอกชื่อ - สกุล">
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
                                        <label for=""><span class="text-danger">*</span>เบอร์โทร :</label>
                                        <input type="tel" name="user_tel" id="" class="form-control" placeholder="โปรดกรอกเบอร์โทร">
                                    </div>
                                    <div class="mb-3">
                                        <label for=""><span class="text-danger">*</span>รหัสผ่าน :</label>
                                        <input type="password" name="user_pass" id="" class="form-control" placeholder="โปรดกรอกรหัสผ่าน">
                                    </div>
                                    <div class="mb-3">
                                        <label for=""><span class="text-danger">*</span>ยืนยันรหัสผ่าน :</label>
                                        <input type="password" name="user_pass2" id="" class="form-control" placeholder="โปรดกรอกยืนยันรหัสผ่าน">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="image">รูปโปรไฟล์</label>
                                        <input type="file" class="form-control" name="user_image" id="image">
                                    </div>
                                    <div class="mt-3">
                                        <a href="#" class="btn btn-secondary">กลับ</a>
                                        <button type="reset" class="btn btn-info">ล้างข้อมูล</button>
                                        <button type="submit" class="btn btn-primary px-5">บันทึกข้อมูล</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>


    <script src="../jquery/jquery-3.6.1.min.js"></script>
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/base.js"></script>
</body>
</html>