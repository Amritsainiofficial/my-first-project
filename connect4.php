<?php
$RegNum=$_POST['RegNum'];
$password=$_POST['password'];

$con = new mysqli("localhost","root","","form");
if($con->connect_error){
    die("Failed to connect :".$con->connect_error);
}else{
    $stmt =$con->prepare("select * from data where Regnum = ? ");
    $stmt->bind_param("s",$RegNum);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data =$stmt_result->fetch_assoc();
        if($data['password']===$password){
            header("Location:studentdashboard.php");
        } else{
            header("location:studentlogin.php");
        }
    }else{
        header("Location:studentlogin.php");
    }
}
?>