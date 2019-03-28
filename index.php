<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="theme1.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script>
    function SayHi(a){
      alert("Hi from "+a);
      //$(".RightPanelTable").hide();

    }
  </script>
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

<!--<div class="RightPanel">
  <table class="RightPanelTable">
	<tr>
		<th>PSID</th>
		<th>Name</th>
		<th>Email Id</th>
		<th>Phone Number</th>
		<th>Salary</th>
		<th>Date of Birth</th>
		<th>Actions </th>
	</tr>
  <tr>
		<td>28193</td>
		<td>Abinash Mishra</td>
		<td>mejablu@gmail.com</td>
		<td>8895294063</td>
		<td>27500</td>
		<td>18-13-1994</td>
	</tr>
  </table>
</div>-->

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
    FetchEmployee();
    exit();
  }
?>
</body>
</html>
