<?php
include('../../conn.php');

$ad_id = $_POST['ad_id'];
$user_id = $my_id;
$cat_id = $_POST['cat_id'];
$ad_body = $_POST['ad_body'];
$ad_link = $_POST['ad_link'];
$ad_image = $_POST['old_image'];
$ad_point = 1000000;

if($_FILES['ad_image']['error'] == 0) {
  $ext = end(explode('.',$_FILES['ad_image']['name']));
  $ad_image = md5(uniqid()).'.'.$ext;
  move_uploaded_file($_FILES['ad_image']['tmp_name'],'../../img/'.$ad_image);
}  
$query = mysqli_query($conn, "UPDATE advert SET
user_id='$user_id',
cat_id='$cat_id',
ad_body='$ad_body',
ad_link='$ad_link',
ad_image='$ad_image',
ad_point='$ad_point'
WHERE ad_id = '$ad_id'
");
if($query) {
  succ('../ads_mng.php','แก้ไขข้อมูลสำเร็จ');
}else {
  err('../ads_edit.php?id='.$ad_id,'แก้ไขข้อมูลไม่สำเร็จ');
}