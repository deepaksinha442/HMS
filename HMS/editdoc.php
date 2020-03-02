<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>EDIT DOCTOR DETAILS</title>
</head>

<body>
    <div>
        <?php
        include("Homepage.php");
        ?>
    </div>
    <div>

        <div class="class container">
            <br><br>
            <h1 class="text-danger text-center border"> UPDATE DOCTOR DETAILS HERE </h1>


            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label>DOCTOR ID </label>
                    <input type="text" class="form-control" name="doctor_id" />



                </div>
                <input class="btn btn-info btn-sm active" type="submit" name="showbtn" value="ENTER DOCTOR ID TO UPDATE DETAILS" />
                <br>


            </form>

            <?php
            if (isset($_POST['showbtn'])) {
                $conn =  new mysqli("localhost", "Deepak", "Deepak@123", "hms");

                $did = $_POST['doctor_id'];

                $sql =  "SELECT * from doctor WHERE doctor_id= '$did'";
                $result = mysqli_query($conn, $sql) or die("QUERY UNSUCCESSFULL.");

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {


            ?>




                        <form action="updatedoctor.php" method="POST">
                            <?php
                            echo '<input name="doctor_id" type="hidden" value="' . $did .  '">';
                            ?>
                            <div class="class container">
                                <div class="form-group">
                                    <br>
                                    <label>First Name: </label>
                                    <input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname'] ?>">
                                </div>

                                <div class="form-group">
                                    <label>Middle Name: </label>
                                    <input type="text" class="form-control" name="middlename" value="<?php echo $row['middlename'] ?>">
                                </div>

                                <div class="form-group">
                                    <label>Last Name: </label>
                                    <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname'] ?>">
                                </div>

                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="browser-default custom-select" name="gender">

                                        <option value="" <?php echo $row['gender'] ?>"" disabled selected>Choose your option</option>

                                        <option>Male</option>
                                        <option>Female</option>


                                    </select>
                                </div>
                                <div class="well">
                                    <div class="form-group">
                                        <label>Date of Birth: </label>
                                        <input type="date" class="form-control" name="dateofbirth" value="<?php echo $row['dateofbirth'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>E-mail Address: </label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                                </div>


                                <div class="form-group">
                                    <label>Contact Number: </label>
                                    <input type="text" class="form-control" name="phonenumber" value="<?php echo $row['phonenumber'] ?>">
                                </div>

                                <div class="form-group">
                                    <label">AADHAR: </label>
                                        <input type="text" class="form-control" name="aadhar" value="<?php echo $row['aadhar'] ?>">
                                </div>

                                <label>Degree </label>
                                <select class="browser-default custom-select" name="degree">

                                    <option value="<?php echo $row['degree'] ?>" disabled selected>Choose your option</option>
                                    <option>MD </option>
                                    <option>MBBS</option>



                                </select>
                                <div class="form-group">
                                    <label">Specialization : </label>
                                        <select class="form-control" name="sepcilization">
                                            <option value="<?php echo $row['sepcilization'] ?>" disabled selected> CHOOSE SPECIALIZATION OF DOCTOR :</option>
                                            <option> Cardiologist</option>
                                            <option> Genreal Physician </option>
                                            <option> ENT Specialist</option>
                                            <option> Gynecologist </option>


                                        </select>

                                        <br><br>
                                        <div class="class col-md-12 " style="text-align:center; margin-top:10px;">
                                            <input class="btn btn-info btn-sm active" type="submit" name="showbtn" value="UPDATE DOCTOR DETAILS" />
                                        </div>

                        </form>
        </div>
<?php
                    }
                }
            }

?>




















    </div>

    </div>
</body>

</html>