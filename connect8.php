<?php
$userid=$_POST['userid'];
$password=$_POST['password'];

$con = new mysqli("localhost","root","","form");
if($con->connect_error){
    die("Failed to connect :".$con->connect_error);
}else{
    $stmt =$con->prepare("select * from admin where userid = ? ");
    $stmt->bind_param("s",$userid);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows > 0){
        $admin =$stmt_result->fetch_assoc();
        if($admin['password']===$password){
            header("Location:admindasboard.php");
        } else{
            header("location:adminlogin.php");
        }
    }else{
        header("Location:adminlogin.php");
    }
}
?>