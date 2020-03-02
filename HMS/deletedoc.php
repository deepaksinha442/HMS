<?php
// create connection 
$conn = new mysqli("localhost", "Deepak", "Deepak@123", "hms");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>DELETE DOCTOR DETAILS</title>
</head>

<body>
  <div>
    <?php
    include("Homepage.php");
    ?>
  </div>
  <div>

     <div class="container">
     <div class ="col-lg-12">
        <br><br>
        <h1 class="text-warning text-center"> DOCTOR DETAILS </h1>
        <br>
        <table class="table table-striped table-hover table-bordered">
        <tr class="text-center">
           <th>DOCTOR ID</th> 
           <th>NAME</th> 
           <th>GENDER</th> 
           <th>DATE OF BIRTH</th>
           <th>DEGREE</th>
           <th>SPECILIAZATION</th>  
           <th>DELETE</th> 



        </tr> 
        <?php

            $q = "select * from doctor";
            $query = mysqli_query($conn,$q);
            while($res = mysqli_fetch_array($query)){

            
        ?>
        
        <tr class="text-center">
           <td><?php echo $res['doctor_id'];?></td> 
           <td><?php echo $res['firstname']; ?></td> 
           <td><?php echo $res['gender']; ?></td> 
           <td><?php echo $res['dateofbirth']; ?></td>
           <td><?php echo $res['degree']; ?></td>
           <td><?php echo $res['sepcilization']; ?></td>    
           <td> <button class="btn-danger btn"><a href="docdel.php?doctor_id=<?php echo $res['doctor_id'];?>" class="text-white">DELETE</a></button></td> 


        </tr>


        <?php 
            }
        ?>
        </table>

     </div>



     </div>
     
     
    


  </div>
</body>

</html>