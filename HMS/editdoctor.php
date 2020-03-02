<?php
   // create connection 
  $conn = new mysqli("localhost", "Deepak", "Deepak@123", "hms");
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 

    

  if(isset($_REQUEST['update'])){
    //checking for empty field 

    if(($_REQUEST['firstname'] == "") ($_REQUEST['firstname'] == "") || ($_REQUEST['middlename'] == "") || ($_REQUEST['lastname'] == "") || ($_REQUEST['gender'] == "") || ($_REQUEST['dateofbirth'] == "") || ($_REQUEST['email'] == "") ||($_REQUEST['phonenumber'] == "") ($_REQUEST['aadhar'] == "")  ($_REQUEST['degree'] == "") || ($_REQUEST['sepcilization'] == "")){

        echo  "<small>FILL ALL FIELDS ...</small><hr>";
    }

    else {

        //UPDATE SQL STATEMENT

        $sql = "UPDATE doctor  SET name  firstname = ?, middlename = ?,  lastname = ?, gender = ?,  dateofbirth = ?, email = ?, phonenumber = ?,  aadhar = ?, degree = ? ,  sepcilization = ? doctor_id = ? ";

        //prepatred statement

        $result = $conn->prepare($sql);

        if($result){
            //Bind variables to Prepared as Parameters

            $result-> bind_param('sssssssssss',  $fname, $mname , $lname, $gender, $birth, $email, $number, $adhar, $degree,$speciliaztion, $doctor_id);

            $fname = $_REQUEST['name1'];
            $mname = $_REQUEST['name2'];
            $lname = $_REQUEST['name3'];
            $gender = $_REQUEST['gen'];
            $birth = $_REQUEST['dob'];
            $email = $_REQUEST['email'];
            $number = $_REQUEST['num'];
            $adhar= $_REQUEST['daadhar'];
            $degree = $_REQUEST['ddeg'];
            $speciliaztion = $_REQUEST['dspec'];
            $doctor_id= $_REQUEST['doctor_id'];

            //Execute prepare statement

            $result->execute();

            //NUmber of rows effected
            echo $result->affected_rows . "ROW UPDATED <br>";

        }

        

            //close prepare statement 

            $result->close();

        }
       
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

  <title>EDIT DOCTOR DETAILS</title>
</head>

<body>
 <hr> 
<h1> EDIT DOCTOR DETAILS HERE </h1>
<hr>
<div class="class container">
    <div class="class row">

        <div class= "col-sm-4">

        
         <?php

            if(isset($_REQUEST['edit'])){
                $sql = "SELECT * from doctor where doctor_id = ?";

                //Prepare statement

                $result = $conn->prepare($sql);

                //Bind paramneter

                $result->bind_param('s', $doctor_id);

                $doctor_id = $_REQUEST['doctorid'];

                //Bind REsult set in variables

                $result->bind_result($doctor_id, $fname, $mname , $lname, $gender, $birth, $email, $number, $adhar, $degree,$speciliaztion);

                //execute statement
                $result->execute();

                //fetch single row data
                $result->fetch();

                //close prepare statement

                $result->close();
            

            }

         ?>  
            <form action="" method="POST"> 
              <div class="class form-group">
                 <label > FIRST NAME </label>
                  <input type="text" class="form-control" name="fname" id="fname" value="<?php if(isset($fname)){ echo $fname;} ?> ">
                </div>

              <div class="class form-group">
               <label > MIDDLE NAME </label>
              <input type="text" class="form-control" name="mname" id="mname" value="<?php if(isset($mname)){ echo $mname;} ?> ">
              </div>

              <div class="class form-group">
               <label > LAST NAME</label>
              <input type="text" class="form-control" name="lname" id="lname" value="<?php if(isset($lname)){ echo $lname;} ?> ">
              </div>


              <div class="class form-group">
               <label > GENDER </label>
              <input type="text" class="form-control" name="gender" id="gender" value="<?php if(isset($gender)){ echo $gender;} ?> ">
             </div>

             <div class="class form-group">
               <label > DATE OF BIRTH</label>
              <input type="text" class="form-control" name="dob" id="dob" value="<?php if(isset($birth)){ echo $birth;} ?> ">
             </div>


             <div class="class form-group">
               <label > EMAIL ADDRESS </label>
              <input type="text" class="form-control" name="mail" id="mail" value="<?php if(isset($email)){ echo $email;} ?> ">
             </div>

             <div class="class form-group">
               <label > CONTACT NUMBER </label>
              <input type="text" class="form-control" name="num" id="num" value="<?php if(isset($number)){ echo $number;} ?> ">
             </div>

             <div class="class form-group">
               <label > AADHAR </label>
              <input type="text" class="form-control" name="aadhar" id="aadhar" value="<?php if(isset($adhar)){ echo $adhar;} ?> ">
             </div>


             <div class="class form-group">
               <label > DEGREE </label>
              <input type="text" class="form-control" name="deg" id="deg" value="<?php if(isset($degree)){ echo $degree;} ?> ">
             </div>

             <div class="class form-group">
               <label > SPECILIAZATION </label>
              <input type="text" class="form-control" name="spec" id="spec" value="<?php if(isset($speciliaztion)){ echo $speciliaztion;} ?> ">
             </div>
             <?php $doctor_id = 0; ?>
             <input type="hidden" name="doctorid" value="<?php echo $doctor_id ?>">
             <button type="submit" class="btn btn-warning" name="update"> UPDATE </button>
            

            </form>
 
 
        </div>
 </div>

</div>

<div class="col-sm-6 offset -sm-2">
<div class="class container-md">
<link rel="stylesheet" type="text/css" href="patient.css">
<?php
        $sql ="SELECT * from doctor";

        $result = $conn->prepare($sql);

        $result->bind_result($doctor_id, $fname, $mname , $lname, $gender, $birth, $email, $number, $adhar, $degree,$speciliaztion);

        $result->execute();

        $result->store_result();

        if($result->num_rows > 0){

            echo '<table class="table">';
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>FIRST NAME</th>";
            echo "<th>MIDDLE NAME</th>";
            echo "<th>LAST NAME</th>";
            echo "<th>GENDER</th>";
            echo "<th>DOB</th>";
            echo "<th>EMAIL</th>";
            echo "<th>NUMBER</th>";
            echo "<th>AADHAR</th>";
            echo "<th>DEGREE</th>";
            echo "<th>SPECILIAZATION</th>"; 
            echo "<th>ACTION</th>";
            echo "</tr>";
            echo "<thead>";
            echo "<tbody>";

            //fetch table data
            while ($result->fetch()){
                echo "<tr>";
                echo "<td>" . $doctor_id. "</td>";
                echo "<td>" . $fname. "</td>";
                echo "<td>" . $mname. "</td>";
                 echo "<td>" . $lname. "</td>";
                echo "<td>" . $gender. "</td>";
                echo "<td>" . $birth. "</td>";
                echo "<td>" . $email. "</td>";
                echo "<td>" . $number. "</td>";
                echo "<td>" . $adhar. "</td>";
                echo "<td>" . $degree. "</td>";
                echo "<td>" . $speciliaztion. "</td>"; 
                echo '<td><form action= "" method ="POST"><input type ="hidden" name="doctorid" value= ' . $doctor_id .'><input type = "submit" class="btn btn-sm btn-warning" name="edit" value="Edit"><form></td>';
                echo "</tr>"; 

                
            }
            echo "</tbody>";
            echo '</table>';

        } else{
            echo "0 RESULTS!";
        }
?>
</div>

</div>