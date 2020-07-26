<?php



session_start();





$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'ekikolo_ne_ddagala');

$disease = $_POST['disease'];
$diseaseA = $_POST['diseaseA'];

$s = "select * from herbs where herb = '$disease'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Disease already exist! <a href='addherb.php'>Back</a>" ;
}else{
    $reg = "insert into herbs(herb, prescription) values ('$disease','$diseaseA')";
    mysqli_query($con, $reg);
    header('location:addherb.php');
}


?>