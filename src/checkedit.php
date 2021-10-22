<?php
$bienso = $_POST['bienso'];
$id = $_POST['id'];
$year = $_POST['year'];
$drate = $_POST['drate'];
$wrate = $_POST['wrate'];
$status = $_POST['status'];
$model = $_POST['model'];
$ctype= $_POST['ctype'];
$oldid=$_POST['oldid'];
echo $oldid;
echo $id;
$conn =mysqli_connect('localhost','root','','blood_bank');
if(!$conn){
die("kết nối thất bại");
}
$sql="UPDATE `cars` SET `vehicle_id`='$id',`license_no`='$bienso',`model`='$model',`year`='$year',`ctype`='$ctype',`drate`='$drate',`wrate`='$wrate',`status`='$status' WHERE vehicle_id ='$oldid'";
$result =  mysqli_query($conn,$sql);
if($result > 0)
    {
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }


?>