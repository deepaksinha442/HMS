<?php
// create connection 
$conn = new mysqli("localhost", "Deepak", "Deepak@123", "hms");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// variables 
$admit_date = $_POST['admitdate'];
$fname = $_POST['name1'];
$mname = $_POST['name2'];
$lname = $_POST['name3'];
$gender = $_POST['gen'];
$birth = $_POST['dob'];
$number = $_POST['num'];
$email = $_POST['email'];
$adhar = $_POST['aadhar1'];
$blood_group = $_POST['blood'];
$weight = $_POST['weight'];
$mstatus = $_POST['status'];
$department = $_POST['dpt'];
$ward_type  = $_POST['ward'];
$room_type = $_POST['room'];



//Generate Ipd Id

$result = mysqli_query($conn, "Select ipd_id from ipd");
if (mysqli_num_rows($result) == 0) {
    $ipd_id = "IP001";
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        $ipd_id = $row["ipd_id"];
    };
    $slno = substr($opd_id, 2, 3);
    $slno = $slno + 1;
    if ($slno < 1000)
        $ipd_id = "IP00" . $slno;
    elseif ($slno < 100)
        $ipd_id = "IP0" . $slno;
    else
        $ipd_id = "IP" . $slno;
}

//SQL INSERT statement 

$sql =  "INSERT INTO ipd (ipd_id, admit_date , fname , mname ,lname, gender ,dateofbirth ,  inumber ,email, aadhar ,blood_group , weight , martialstatus ,department ,ward_type , room_type) VALUES ('$ipd_id', '$admit_date', '$fname', '$mname' , '$lname', '$gender', '$birth', '$number','$email', '$adhar', '$blood_group','$weight' , '$mstatus' , '$department', '$ward_type', '$room_type')";

if ($conn->query($sql) === TRUE) {
    echo "<hr>";
    echo " <h3  ADMITTED SUCCESSFULLY ! </h3> ";
    echo "<hr>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
