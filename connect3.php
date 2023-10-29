<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $GuardID=$_POST['GuardID'];
    $email=$_POST['email'];
    $password =$_POST['password'];

$con=new mysqli('localhost','root','','form')
;
if($con){
    //echo "Connection Successful";
    $sql="insert into `data2`(GuardID,email,password)values('$GuardID','$email','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:guardlogin.php");
    }
    else{
        die(mysqli_error($con));
    }
}else{
    die(mysqli_error($con));
}
}
?>