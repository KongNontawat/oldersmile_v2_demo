<?php
include('../../conn.php');

$user_name = $_POST['user_name'];
$user_gender = $_POST['user_gender'];
$user_dob = $_POST['user_dob'];
$user_tel = $_POST['user_tel'];
$user_role = $_POST['user_role'];
$user_pass = $_POST['user_pass'];
$user_image = '';

$user_pass2 = $_POST['user_pass2'];

if($user_pass == $user_pass2) {
  $query = mysqli_query($conn,"SELECT * FROM user WHERE user_name = '$user_name'");
  if(mysqli_num_rows($query) > 0) {
    err('../user_add.php','ชื่อผู้ใช้นี้มีอยู่แล้ว');
  }else {
    if($_FILES['user_image']['error'] == 0) {
      $ext = end(explode('.',$_FILES['user_image']['name']));
      $user_image = md5(uniqid()).'.'.$ext;
      move_uploaded_file($_FILES['user_image']['tmp_name'],'../../img/'.$user_image);
    }else {
      $user_image = 'avatar.png';
    }  
    $query2 = mysqli_query($conn, "INSERT INTO user VALUES('','$user_name','$user_gender','$user_dob','$user_tel','$user_role','$user_pass','$user_image')");
    if($query2) {
      succ('../user_mng.php','บันทึกข้อมูลสำเร็จ');
    }else {
      err('../user_add.php','บันทึกข้อมูลไม่สำเร็จ');
    }
  }
}else {
  err('../user_add.php','รหัสผ่านและยืนยันรหัสผ่านไม่ตรงกัน');
}
