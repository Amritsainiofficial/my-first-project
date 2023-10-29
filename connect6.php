<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $id=$_POST['id'];
    $caughtin =$_POST['caughtin'];
    $image=$_POST['image'];

$con=new mysqli('localhost','root','','form')
;
if($con){
    //echo "Connection Successful";
    $sql="insert into `data3`(name,id,caughtin,image)values('$name','$id','$caughtin','$image')";
    $result=mysqli_query($con,$sql);
    if($result){
        header("Location:studentcomplain.php");
    }
    else{
        die(mysqli_error($con));
    }
}else{
    die(mysqli_error($con));
}

}

?>