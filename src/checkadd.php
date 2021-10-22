<?php
$bienso = $_POST['bienso'];
$id = $_POST['id'];
$year = $_POST['year'];
$drate = $_POST['drate'];
$wrate = $_POST['wrate'];
$status = $_POST['status'];
$model = $_POST['model'];
$ctype= $_POST['ctype'];
$conn =mysqli_connect('localhost','root','','blood_bank');
if(!$conn){
die("kết nối thất bại");
}

$sql_1 = "INSERT INTO cars values('$id','$bienso','$model','$year','$ctype','$drate','$wrate','$status')";
echo $sql_1;
    $result_1 = mysqli_query($conn,$sql_1);
    if($result_1 > 0)
    {
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }
