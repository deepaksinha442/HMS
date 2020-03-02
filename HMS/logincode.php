<?php
	session_start();
 $con= new mysqli("localhost","Deepak","Deepak@123","hms");
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
 echo" Connected successfully";
}

 $name= $_POST["username"];
 $password= $_POST["password"];
 
 $query= "select * from login where username='" . $name."' AND password='" .$password ."'";

 echo $query;

 $result = $con->query($query);
 $num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION["uname"]= $name;
  header("Location: Homepage.php");
}

else{
 echo" you have entered incorrect password";
}
