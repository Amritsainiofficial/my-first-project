<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $caughtin =$_POST['about'];
    $image=$_POST['image'];

$con=new mysqli('localhost','root','','form')
;
if($con){
    //echo "Connection Successful";
    $sql="insert into `data4`(name,about,image)values('$name','$about','$image')";
    $result=mysqli_query($con,$sql);
    if($result){
        header("Location:materialreport.php");
    }
    else{
        die(mysqli_error($con));
    }
}else{
    die(mysqli_error($con));
}

}

?>