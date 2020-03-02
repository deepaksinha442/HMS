<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>EMRGENCY DEPARTMENT</title>
  <link rel="icon" href="" type="image/x-icon">
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
      <form action="" method="POST">
        <br>
        <h3 class="text-primary text-center">CASUALITY AND EMERGENCY SERVICES </h3>

        <br>
        <div class="row jumbotron">

          <form>
            <div class="class col-md-12">
              <hr>
              <h3 class="text-danger text-center "> PATIENT INFORMATION </h3>
              <hr>
            </div>

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
                  <input type="date" class="form-control" name="dob" name="birthdate" placeholder="Enter Your Date of Birth">
                </div>
              </div>


            </div>

            <div class="class col-md-12">

              <label for="inputname">Contact Number </label>
              <input type="text" class="form-control" name="num" placeholder="Enter Contact Number">


            </div>

            <div class="class col-md-12">

              <label for="inputname">Email Address </label>
              <input type="email" class="form-control" name="email" placeholder="Enter Email Address">


            </div>


            <div class="class col-md-12">

              <label>AADHAR: </label>
              <input type="text" class="form-control" name="daadhar" placeholder="Enter AADHAR Number">
            </div>





            <div class="class col-md-12">

              <label">Cause: </label>
                <select class="form-control" name="ecause">
                  <option value="" disabled selected> CHOOSE REASON :</option>
                  <option>ACCIDENT</option>
                  <option> OTHER REASON </option>

                </select>

            </div>









            <div class="class col-md-12 " style="text-align:center; margin-top:40px;">
              <button class="btn btn-info text-center" type="submit" name="submit">ADD EMERGENCY</button>
            </div>
          </form>



































      </form>


    </div>
  </div>
</body>

</html>