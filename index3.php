<?php 


/*require_once('config/db.php');
$query = "select * from users";
$result = mysqli_query($con,$query);
*/

require_once 'config3/db3.php';
require_once 'config3/functions3.php';

$result = dispaly_data();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Admin</title>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Student Complains</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td> name </td>
                  <td> id </td>
                  <td>caughtin</td>
                  <td> image </td>
                </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['caughtin']; ?></td> 
                  <td><?php echo $row['image']; ?></td> 
                </tr>
                <?php    
                  }
                
                ?>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>