<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="theme1.css">
</head>
<body>
<div class="LeftPanel">
<form method="POST">
  <h1>Register a new Employee:</h1>
  First Name:<br>
  <input type="text" name="firstname" placeholder="Jhon"><br>
  Last Name:<br>
  <input type="text" name="lastname" placeholder="Doe"><br>
  Email Id:<br>
  <input type="email" name="mailid" placeholder="jhon.doe@gmail.com"><br>
  Phone Number:<br>
  <input type="tel" name="mobileno" placeholder="8895294063"><br>
  Date of Birth:<br>
  <input type="date" name="dob" placeholder="01/01/1995"><br>
  Salary:<br>
  <input type="number" name="salary" placeholder="10000"><br>
  <button type="submit" name="buttonclick" value="Submit">Submit</button>
</form>
</div>

<div class="RightPanel">
  dmkmvfe
</div>

<?php
  include 'functions.php';
  if(array_key_exists('buttonclick',$_POST)){
    $employee_data = array();
    $employee_data['fname'] = $_POST['firstname'];
    $employee_data['lname'] = $_POST['lastname'];
    $employee_data['mail'] = $_POST['mailid'];
    $employee_data['mobile'] = $_POST['mobileno'];
    $employee_data['birth'] = $_POST['dob'];
    $employee_data['salary'] = $_POST['salary'];
    AddEmployee($employee_data);
  }
?>
</body>
</html>
