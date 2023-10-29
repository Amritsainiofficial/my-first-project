<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $userid=$_POST['userid'];
    $password =$_POST['password'];

$con=new mysqli('localhost','root','','form')
;
if($con){
    //echo "Connection Successful";
    $sql="insert into `admin`(userid,password)values('$userid','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:adminlogin.php");
    }
    else{
        die(mysqli_error($con));
    }
}else{
    die(mysqli_error($con));
}
}
?>