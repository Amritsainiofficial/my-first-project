<?php 

  require_once 'db3.php';

  function dispaly_data(){
    global $con;
    $query = "select * from data3";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>