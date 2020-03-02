<?php
// create connection 
$conn = new mysqli("localhost", "Deepak", "Deepak@123", "hms");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ADMIT PATIENT TO IPD</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
  <div>
    <?php
    include("Homepage.php");
    ?>
  </div>
  <div>

    <div class="class container">
      <form action="ipddata.php" method="POST">
        <br>
        <h3 class="text-info text-center"> ADMIT PATIENT TO IPD: </h3>

        <br>
        <div class="row jumbotron">
          <form>
            <div class="class col-md-12">
              <label> ADMIT DATE </label>
              <input type="date" class="form-control" name="admitdate" placeholder="Enter Date">

            </div>
            <br><br>
            <div class="class col-md-12">


              <label for="inputname">First Name </label>
              <input type="text" class="form-control" name="name1" placeholder="Enter First Name">


            </div>

            <div class="class col-md-12">

              <label for="inputname">Middle Name </label>
              <input type="text" class="form-control" name="name2" placeholder="Enter First Name">


            </div>

            <div class="class col-md-12">

              <label for="inputname">Last Name </label>
              <input type="text" class="form-control" name="name3" placeholder="Enter Last Name">


            </div>

            <div class="class col-md-12">

              <label>Gender</label>
              <select class="browser-default custom-select" name="gen">
                <option value="" disabled selected>Choose your option</option>
                <option>Male</option>
                <option>Female</option>


              </select>
            </div>

            <div class="class col-md-12">

              <div class="well">
                <div class="form-group">
                  <label>Date of Birth</label>
                  <input type="date" class="form-control" name="dob"  placeholder="Enter Your Date of Birth">
                </div>
              </div>


            </div>

            <div class="class col-md-12">

              <label for="inputname">Contact Number </label>
              <input type="text" maxlength="10" class="form-control" name="num" placeholder="Enter Contact Number">


            </div>

            <div class="class col-md-12">

              <label for="inputname">Email Address </label>
              <input type="email" class="form-control" name="email" placeholder="Enter Email Address">


            </div>


            <div class="class col-md-12">

              <label>AADHAR </label>
              <input type="text" maxlength="12" class="form-control" name="aadhar1" placeholder="Enter AADHAR Number">
            </div>



            <div class="class col-md-12">
              <label>BLOOD GROUP </label>
              <select class="browser-default custom-select" name="blood">
                <option value="" disabled selected>Choose Blood Group</option>

                <?php

                $sql = "SELECT distinct(bloodlist) from  blood_group";
                $result = $conn->query($sql);

                while ($row = mysqli_fetch_assoc($result)) {


                ?>

                  <option><?php echo $row['bloodlist'] ?></option>
                <?php } ?>
              </select>

              </select>

            </div>



            <div class="class col-md-12">

              <label"> WEIGHT OF PATIENT </label>
                <input type="text" class="form-control" name="weight" placeholder="Enter Weight of Patient">

            </div>


            <div class="class col-md-12">

              <label>Martial Status: </label>
              <select class="browser-default custom-select"  name="status">


                <option value="" disabled selected>Choose your option</option>


                <option>Single</option>
                <option>Marriaged</option>
                <option>Divorced</option>

              </select>

            </div>

            <div class="class col-md-12">
              <hr>
              <h3 class="text-success text-center"> HOSPITAL DETAILS </h3>
              <hr>
            </div>

            <div class="class col-md-12">

              <label>Department: </label>
              <select class="browser-default custom-select" id="status" name="dpt">
                <option value="" disabled selected>Choose Department</option>

                <?php

                $sql = "SELECT distinct(department) from department";
                $result = $conn->query($sql);

                while ($row = mysqli_fetch_assoc($result)) {


                ?>

                  <option><?php echo $row['department'] ?></option>
                <?php } ?>
              </select>



            </div>

            <div class="class col-md-12">
              <label">Name of Consulting Doctor : </label>
                <select class="browser-default custom-select">
                  <option value="" disabled selected>Select Doctor</option>
                  <?php

                      $sql = "SELECT distinct firstname, middlename, lastname  from doctor";
                      $result = $conn->query($sql);

                      while ($row = mysqli_fetch_assoc($result)) {


                      ?>

                        <option><?php echo $row['firstname'] . $row['middlename'] . $row['lastname'] ?></option>
                      <?php } ?>
                </select>

            </div>


            <div class="class col-md-12">
              <label> WARD TYPE</label>
              <select class="browser-default custom-select" name="ward">
                <option value="" disabled selected>Select Ward</option>
                <option>ICU</option>
                <option>Genral Ward</option>
                <option>Maternity Ward</option>
              </select>

            </div>



            <div class="class col-md-12">
              <label> ROOM TYPE</label>
              <select class="browser-default custom-select" name="room">
                <option value="" disabled selected>Select Room</option>
                <option>Single room </option>
                
              </select>

            </div>














            <div class=" class col-md-12 " style=" text-align:center; margin-top:40px;">
              <button class="btn btn-success text-center" type="submit" name="submit">ADMIT PATIENT!</button>
            </div>
          </form>



































      </form>


    </div>
  </div>
</body>

</html>