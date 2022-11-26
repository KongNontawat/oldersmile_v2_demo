<?php
include('../../conn.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM question WHERE ques_id = '$id'");

if($query) {
  succ('../ques_mng.php','ลบข้อมูลสำเร็จ');
}else {
  err('../ques_mng.php','ลบข้อมูลไม่สำเร็จ');
}