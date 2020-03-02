<?php
include("pagevalidation.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOMEPAGE HMS!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="validate.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">

        <ul class="navbar-nav">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    OPD MANAGEMENT
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="appointment.php">New Patient Registration</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="prescription.php">Prescription Deatils of Patient</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="">OPD CARD OF PATIENT</a>
                    <div class="dropdown-divider"></div>

                </div>
            </li>



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    APPOINTMENT MANAGEMENT
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" id="newapp" href="opdnew.php">Create New Appointment</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="viewappointment.php">View Appointment</a>
                    <div class="dropdown-divider"></div>



                </div>
            </li>



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    IPD MANAGEMENT
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="ipd.php">Admit Patient</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="treatment.php">Treatment of Patient</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Discharge Patient</a>
                    <div class="dropdown-divider"></div>





                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    EMERGENCY SERVICES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="emergency.php">EMERGENCY CASE REGISTRATION</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Further Action..</a>
                    <div class="dropdown-divider"></div>


                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    STAFF MANAGEMENT
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="newdoctor.php">Add Doctor</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="viewdoctor.php">View Doctor</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="editdoc.php">Update Doctor Deatils</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="deletedoc.php">Delete Doctor Deatils</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="staff.php">Add Staff</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="viewstaff.php">View Staff</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="editstaff.php">Update Satff Deatils</a>
                    <div class="dropdown-divider"></div>


                </div>

            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    BILLING
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Generate Bill</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">View Bill</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Pay Bill</a>
                    <div class="dropdown-divider"></div>

                </div>

            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    MIS REPORTS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">VIEW NUMBER OF APPOINTMENTS</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">VIEW NUMBER OF IPD </a>
                    <div class="dropdown-divider"></div>


                </div>

            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="btn btn-info" type="submit" href="logout.php" role="button">LOGOUT</a></li>
        </ul>
    </nav>


</body>

</html>