<?php



session_start();





$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'ekikolo_ne_ddagala');

$name = $_POST['name'];
$pass = $_POST['password'];
$nin = $_POST['nin'];
$address = $_POST['address'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$radiod = $_POST['radiod'];
$language = $_POST['language'];


$s = "select * from usertable where name = '$name' && phone_number ='$phone'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken or Code";
}else{
    $reg = "insert into usertable(name, password, nin, address, mail, phone_number, radioD, language) values ('$name', '$pass', '$nin', '$address', '$mail', '$phone', '$radiod', '$language')";
    mysqli_query($con, $reg);
    echo "Registration Successfull <a href='login.php'>Login</a> ";
}


?>