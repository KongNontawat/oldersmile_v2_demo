<?php
include('../../conn.php');

$ques_body = $_POST['ques_body'];


$query = mysqli_query($conn, "INSERT INTO question VALUES('','$ques_body')");

if($query) {
  succ('../ques_mng.php','บันทึกข้อมูลสำเร็จ');
}else {
  err('../ques_mng.php','บันทึกข้อมูลไม่สำเร็จ');
}