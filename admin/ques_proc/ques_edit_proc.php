<?php
include('../../conn.php');

$ques_id = $_POST['ques_id'];
$ques_body = $_POST['ques_body'];

$query = mysqli_query($conn, "UPDATE question SET ques_body = '$ques_body' WHERE ques_id = '$ques_id'");

if($query) {
  succ('../ques_mng.php','แก้ไขข้อมูลสำเร็จ');
}else {
  err('../ques_mng.php','แก้ไขข้อมูลไม่สำเร็จ');
}