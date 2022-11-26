<?php
include('../../conn.php');

$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$user_gender = $_POST['user_gender'];
$user_dob = $_POST['user_dob'];
$user_tel = $_POST['user_tel'];
$user_role = $_POST['user_role'];
$user_pass = ($_POST['user_pass'])?$_POST['user_pass']:$_POST['old_pass'];
$user_image = $_POST['old_image'];

$query = mysqli_query($conn,"SELECT * FROM user WHERE user_name = '$user_name' AND NOT user_id = '$user_id'");
if(mysqli_num_rows($query) > 0) {
  err('../user_add.php','ชื่อผู้ใช้นี้มีอยู่แล้ว');
}else {
  if($_FILES['user_image']['error'] == 0) {
    $ext = end(explode('.',$_FILES['user_image']['name']));
    $user_image = md5(uniqid()).'.'.$ext;
    move_uploaded_file($_FILES['user_image']['tmp_name'],'../../img/'.$user_image);
  }
  $query2 = mysqli_query($conn, "UPDATE user SET
  user_name = '$user_name',
  user_gender = '$user_gender',
  user_dob = '$user_dob',
  user_tel = '$user_tel',
  user_role = '$user_role',
  user_pass = '$user_pass',
  user_image = '$user_image'
  WHERE user_id = '$user_id'
  ");
  if($query2) {
    succ('../user_mng.php','แก้ไขข้อมูลสำเร็จ');
  }else {
    err('../user_edit.php?id='.$user_id,'แก้ไขข้อมูลไม่สำเร็จ');
  }
}

