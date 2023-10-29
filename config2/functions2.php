<?php 

  require_once 'db2.php';

  function dispaly_data(){
    global $con;
    $query = "select * from data";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>