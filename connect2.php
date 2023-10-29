<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $RegNo=$_POST['RegNum'];
    $email=$_POST['email'];
    $password =$_POST['password'];

$con=new mysqli('localhost','root','','form')
;
if($con){
    //echo "Connection Successful";
    $sql="insert into `data`(RegNum,email,password)values('$RegNo','$email','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        header("Location:studentlogin.php");
    }
    else{
        die(mysqli_error($con));
    }
}else{
    die(mysqli_error($con));
}

}

?>