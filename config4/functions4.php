<?php 

  require_once 'db4.php';

  function dispaly_data(){
    global $con;
    $query = "select * from data4";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>