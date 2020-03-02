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
  <title>NEW APPOINTMENT</title>

  <link rel="icon" href="IMAGES/laptop.png" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>

<body>
  <div>
    <?php
    include("Homepage.php");
    ?>
  </div>
  <div>

    <div class="class container">
      <form action="pcode.php" method="POST" onsubmit="return myfun()">
        <br>
        <h1 class="text-center"><span class="badge badge-secondary">Please Provide Details of Patient for Whom Appointment is Required:</span></h1>

        <br>
        <div class="row jumbotron">
          <form>
            <div class="class col-md-12">

              <label for="inputname">First Name </label>


              <input type="text" class="form-control" name="pname" id="fname" placeholder="Enter First Name">
              <span id="fmsg" class="text-danger font-weight-bold"></span><br>


            </div>

            <div class="class col-md-12">

              <label for="inputname">Middle Name </label>
              <input type="text" class="form-control" name="pname1" placeholder="Enter First Name">


            </div>

            <div class="class col-md-12">

              <label for="inputname">Last Name </label>

              <input type="text" class="form-control" name="pname2" id="lname" placeholder="Enter Last Name">
              <span id="lmsg" class="text-danger font-weight-bold"></span><br>




            </div>

            <div class="class col-md-12">

              <label>Gender</label>
              <select class="browser-default custom-select" id="gender" name="gen">
                <option value="" disabled selected>Choose your option</option>
                <span id="gmsg" class="text-danger font-weight-bold"></span><br>

                <option>Male</option>
                <option>Female</option>


              </select>
            </div>

            <div class="class col-md-12">

              <div class="well">
                <div class="form-group">
                  <label>Date of Birth</label>
                  <input type="date" class="form-control" id="dob" name="birthdate" placeholder="Enter Your Date of Birth">
                  <span id="dmsg" class="text-danger font-weight-bold"></span><br>

                </div>
              </div>


            </div>

            <div class="class col-md-12">

              <label for="inputname">Contact Number </label>
              <input type="text" class="form-control" maxlength="10" autocomplete="off" name="intnum" id="num" placeholder="Enter Contact Number">
              <span id="msg" class="text-danger font-weight-bold"></span><br>


            </div>

            <div class="class col-md-12">

              <label for="inputname">Email Address </label>
              <input type="email" class="form-control" id="email" name="mail" placeholder="Enter Email Address">
              <span id="emsg" class="text-danger font-weight-bold"></span><br>



            </div>


            <div class="class col-md-12">

              <label>AADHAR: </label>
              <input type="text" class="form-control" maxlength="12" autocomplete="off" name="aadhar" id="adhr" placeholder="Enter AADHAR Number">
              <span id="amsg" class="text-danger font-weight-bold"></span><br>
            </div>


            <div class="class col-md-12">

              <label>Martial Status: </label>
              <select class="browser-default custom-select" id="status" name="mstatus">


                <option value="" disabled selected>Choose your option</option>
                <span id="mmsg" class="text-danger font-weight-bold"></span><br>

                <option>Single</option>
                <option>Marriaged</option>
                <option>Divorced</option>

              </select>
            </div>
            <br>

            <div class="class col-md-12">

              <div class="form-group">
                <label">Address Line 1</label>


                  <textarea class="form-control" id="add1" name="address1" rows="3"></textarea>
                  <span id="amsg" class="text-danger font-weight-bold"></span><br>

              </div>
            </div>

            <div class="class col-md-12">

              <div class="form-group">
                <label">Address Line 2</label>
                  <textarea class="form-control" id="add2" name="address2" rows="2"></textarea>
                  <span id="a1msg" class="text-danger font-weight-bold"></span><br>

              </div>
            </div>

            <div class="class col-md-12">
              <label">STATE : </label>
                <select class="browser-default custom-select" name="state" id="st">
                  <option value="" disabled selected>Choose your STATE </option>
                  <span id="statemsg" class="text-danger font-weight-bold"></span><br>

                  <?php

                  $sql = "SELECT distinct(statelist) from state";
                  $result = $conn->query($sql);

                  while ($row = mysqli_fetch_assoc($result)) {


                  ?>
                    <option><?php echo $row['statelist'] ?></option>
                  <?php } ?>
                </select>
            </div>

            <div class="class col-md-12">
              <label>CITY: </label>
              <input type="text" name="city" id="cty" class="form-control" placeholder="Enter CITY">
            </div>

            <div class="class col-md-12">
              <label>PIN: </label>
              <input type="text" name="pin" maxlength="6" intege autocomplete="off" class="form-control" placeholder="Enter Pin Code">
              <span id="pmsg" class="text-danger font-weight-bold"></span><br>

            </div>

            <div class="class col-md-12">

              <label>Department</label>
              <select class="browser-default custom-select" id="dpt" name="department">

                <option value="" disabled selected>Choose your option</option>
                <span id="dptmsg" class="text-danger font-weight-bold"></span><br>

                <?php

                $sql = "SELECT distinct(department) from department";
                $result = $conn->query($sql);

                while ($row = mysqli_fetch_assoc($result)) {


                ?>

                  <option><?php echo $row['department'] ?></option>
                <?php } ?>

              </select>
            </div>





        



        <div class="class col-md-12 " style="text-align:center; margin-top:40px;">
          <button class="btn btn-success text-center" type="submit" name="submit" id="app">GET-APPOINTMENT!</button>
        </div>
        </div>
      



































      </form>


    </div>
  </div>



  <script type="text/javascript">
    function myfun() {

      var a = document.getElementById("num").value;

      if (a == "") {
        document.getElementById("msg").innerHTML = "** PLEASE FILL MOBILE NUMBER";
        return false;
      }

      if (isNaN(a)) {
        document.getElementById("msg").innerHTML = "** ENTER ONLY NUMERIC VALUE";
        return false;
      }

      if (a.length < 10) {
        document.getElementById("msg").innerHTML = "** MOBILE NUMBER MUST BE OF 10 DIGITS! **";
        return false;
      }

      var b = document.getElementById("adhr").value;

      if (b == "") {
        document.getElementById("amsg").innerHTML = "** PLEASE FILL AADHAR NUMBER";
        return false;
      }

      if (isNaN(b)) {
        document.getElementById("amsg").innerHTML = "** ENTER ONLY NUMERIC DIGITS IN AADHAR";
        return false;
      }

      if (b.length < 12) {
        document.getElementById("amsg").innerHTML = "** AADHAR NUMBER MUST BE OF 12 DIGITS!";
        return false;
      }

      var c = document.getElementById("fname").value;

      if (c == "") {
        document.getElementById("fmsg").innerHTML = "** PLEASE ENTER FIRST NAME";
        return false;


      }

      var d = document.getElementById("lname").value;


      if (d == "") {
        document.getElementById("lmsg").innerHTML = "** PLEASE ENTER LAST NAME";
        return false;

      }








    }
  </script>
</body>

</html>