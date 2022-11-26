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
                            <li class="breadcrumb-item active">จัดการสมาชิก</li>
                        </ol>

                        <div class="d-flex justify-content-between flex-wrap align-items-center">
                            <h3>จัดการสมาชิก</h3>  

                            <div class="d-flex flex-wrap">
                                <a href="user_add.php" class="btn btn-primary me-3">+ เพิ่มสมาชิก</a>

                                <form action="" method="get">
                                    <div class="input-group">
                                        <input type="text" name="search" id="" class="form-control" placeholder="ค้นหา...">
                                        <button type="submit" class="btn btn-outline-secondary">ค้นหา</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Table!!! -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">#</th>
                                        <th style="width: 5%;"></th>
                                        <th style="width: 15%;">ชื่อผู้ใช้</th>
                                        <th style="width: 20%;">ชื่อ - สกุล</th>
                                        <th style="width: 15%;">เบอรโทร</th>
                                        <th style="width: 5%;">เพศ</th>
                                        <th style="width: 10%;">วันเกิด</th>
                                        <th style="width: 10%;">สถานะ</th>
                                        <th style="width: 20%;"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="../img/avatar/1.png" height="50" width="50" alt="" class="rounded-circle border">
                                        </td>
                                        <td>Kong</td>
                                        <td>Kong Nontawat</td>
                                        <td>0644870915</td>
                                        <td>ชาย</td>
                                        <td>30/11/2002</td>
                                        <td><span class="badge bg-primary">user</span></td>
                                        <td>
                                            <a href="user_edit.php?id=" class="btn btn-warning">แก้ไข</a>
                                            <a href="user_proc/user_del_proc.php?id=" onclick="return confirm('คุณแน่ใจ หรือไม่ ว่าจะลบ')" class="btn btn-danger">ลบ</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <img src="../img/avatar/2.png" height="50" width="50" alt="" class="rounded-circle border">
                                        </td>
                                        <td>Fiw</td>
                                        <td>Atiwat nangam</td>
                                        <td>0684454684</td>
                                        <td>ชาย</td>
                                        <td>11/05/2002</td>
                                        <td><span class="badge bg-danger">admin</span></td>
                                        <td>
                                            <a href="user_edit.php?id=" class="btn btn-warning">แก้ไข</a>
                                            <a href="user_proc/user_del_proc.php?id=" onclick="return confirm('คุณแน่ใจ หรือไม่ ว่าจะลบ')" class="btn btn-danger">ลบ</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <img src="../img/avatar/3.png" height="50" width="50" alt="" class="rounded-circle border">
                                        </td>
                                        <td>Leo</td>
                                        <td>Leo inwzaa</td>
                                        <td>0898546546</td>
                                        <td>ชาย</td>
                                        <td>24/09/2002</td>
                                        <td><span class="badge bg-warning">partner</span></td>
                                        <td>
                                            <a href="user_edit.php?id=" class="btn btn-warning">แก้ไข</a>
                                            <a href="user_proc/user_del_proc.php?id=" onclick="return confirm('คุณแน่ใจ หรือไม่ ว่าจะลบ')" class="btn btn-danger">ลบ</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <img src="../img/avatar/4.png" height="50" width="50" alt="" class="rounded-circle border">
                                        </td>
                                        <td>Guygy</td>
                                        <td>Guygy inwzaa</td>
                                        <td>0754654654</td>
                                        <td>ชาย</td>
                                        <td>20/11/2002</td>
                                        <td><span class="badge bg-primary">user</span></td>
                                        <td>
                                            <a href="user_edit.php?id=" class="btn btn-warning">แก้ไข</a>
                                            <a href="user_proc/user_del_proc.php?id=" onclick="return confirm('คุณแน่ใจ หรือไม่ ว่าจะลบ')" class="btn btn-danger">ลบ</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <img src="../img/avatar/8.png" height="50" width="50" alt="" class="rounded-circle border">
                                        </td>
                                        <td>GuyGuyy</td>
                                        <td>partner GuyGuyy</td>
                                        <td>0656546545</td>
                                        <td>ชาย</td>
                                        <td>16/06/2001</td>
                                        <td><span class="badge bg-primary">user</span></td>
                                        <td>
                                            <a href="user_edit.php?id=" class="btn btn-warning">แก้ไข</a>
                                            <a href="user_proc/user_del_proc.php?id=" onclick="return confirm('คุณแน่ใจ หรือไม่ ว่าจะลบ')" class="btn btn-danger">ลบ</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <img src="../img/avatar/6.png" height="50" width="50" alt="" class="rounded-circle border">
                                        </td>
                                        <td>Sara doe</td>
                                        <td>Sara Sara</td>
                                        <td>0668565162</td>
                                        <td>หญิง</td>
                                        <td>26/12/2000</td>
                                        <td><span class="badge bg-primary">user</span></td>
                                        <td>
                                            <a href="user_edit.php?id=" class="btn btn-warning">แก้ไข</a>
                                            <a href="user_proc/user_del_proc.php?id=" onclick="return confirm('คุณแน่ใจ หรือไม่ ว่าจะลบ')" class="btn btn-danger">ลบ</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <img src="../img/avatar/7.png" height="50" width="50" alt="" class="rounded-circle border">
                                        </td>
                                        <td>minnyy</td>
                                        <td>mint inwzaa</td>
                                        <td>0879546555</td>
                                        <td>หญิง</td>
                                        <td>29/07/2004</td>
                                        <td><span class="badge bg-primary">user</span></td>
                                        <td>
                                            <a href="user_edit.php?id=" class="btn btn-warning">แก้ไข</a>
                                            <a href="user_proc/user_del_proc.php?id=" onclick="return confirm('คุณแน่ใจ หรือไม่ ว่าจะลบ')" class="btn btn-danger">ลบ</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
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