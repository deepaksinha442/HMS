<?php
// create connection 
$conn = new mysqli("localhost", "Deepak", "Deepak@123", "hms");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// variables 
$fname = $_POST['name1'];
$mname = $_POST['name2'];
$lname = $_POST['name3'];
$gender = $_POST['gen'];
$birth = $_POST['dob'];
$email = $_POST['email'];
$number = $_POST['num'];
$adhar= $_POST['daadhar'];
$degree = $_POST['ddeg'];
$speciliaztion = $_POST['dspec'];



//Generate Doctor Id

$result = mysqli_query($conn, "Select doctor_id from doctor");
if (mysqli_num_rows($result) == 0) {
    $doctor_id = "D001";
}
else
{
    While($row = mysqli_fetch_assoc($result))
    {
        $doctor_id = $row["doctor_id"];
    };
    $slno = substr($doctor_id,1,3);
    $slno = $slno + 1;
    if($slno<10)
        $doctor_id = "D00" . $slno;
    elseif($slno<100)
        $doctor_id = "D0" . $slno;
    else
        $doctor_id = "D" . $slno;
}

 //SQL INSERT statement 

 $sql =  "INSERT INTO doctor (doctor_id , firstname , middlename ,lastname, gender ,dateofbirth ,email, phonenumber ,aadhar ,degree ,sepcilization) VALUES ('$doctor_id', '$fname', '$mname' , '$lname', '$gender', '$birth', '$email', '$number', '$adhar', '$degree','$speciliaztion')";
 
 if ($conn->query($sql) === TRUE) {
    header("location:viewdoctor.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    
}

$conn->close();
?>
