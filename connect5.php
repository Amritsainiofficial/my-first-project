<?php
$GuardID=$_POST['GuardID'];
$password=$_POST['password'];

$con = new mysqli("localhost","root","","form");
if($con->connect_error){
    die("Failed to connect :".$con->connect_error);
}else{
    $stmt =$con->prepare("select * from data2 where GuardID = ? ");
    $stmt->bind_param("s",$GuardID);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data =$stmt_result->fetch_assoc();
        if($data['password']===$password){
            header("Location:guarddashboard.php");
        } else{
            header("location:guardlogin.php");
        }
    }else{
        header("Location:guardlogin.php");
    }
}
?>