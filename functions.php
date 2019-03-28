<?php
function AddEmployee($employee_data)
{
  include 'db_constants.php';
  $dbname = "morpheus_studio";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO employee (first_name, last_name, email, phone, salary, dob) VALUES ('".$employee_data['fname']."',
    '".$employee_data['lname']."',
     '".$employee_data['mail']."',
     '".$employee_data['mobile']."',
     '".$employee_data['salary']."',
     '".$employee_data['birth']."')";

  $check=mysqli_query($conn,"select * from employee where first_name='".$employee_data['fname']."' and last_name='".$employee_data['lname']."'");
  $checkrows=mysqli_num_rows($check);

  if($checkrows>0){
      echo "<p class='ConfirmText'>Record already exist.</p>";
  }
  else {
    if(!empty($employee_data['fname'])){
      if ($conn->query($sql) === TRUE) {
          echo "<p class='ConfirmText'>New record created successfully</p>";

          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    else {
        //echo "<p class='ConfirmText'>No data provided.</p>";
    }
  }
  $conn->close();
}

function FetchEmployee()
{
  include 'db_constants.php';
  $dbname = "morpheus_studio";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }


  $sql = "SELECT * FROM employee";
  $result = $conn->query($sql);

  echo "<div class='RightPanel'>
    <table class='RightPanelTable'>
  	<tr>
  		<th>PSID</th>
  		<th>Name</th>
  		<th>Email Id</th>
  		<th>Phone Number</th>
  		<th>Salary</th>
  		<th>Date of Birth</th>
  		<th>Actions </th>
  	</tr>";

  if ($result->num_rows > 0) {
    // output data of each row
    $tmpCount = 1;
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                  <td>" . $row["psid"]. "</td>
                  <td>" . $row["first_name"]. " " . $row["last_name"]. "</td>
                  <td>" . $row["email"]. "</td>
                  <td>" . $row["phone"]. "</td>
                  <td>" . $row["salary"]. "</td>
                  <td>" . $row["dob"]. "</td>
                  <td> <img src = 'delete.png' class='rowIcon' onclick='SayHi(".$tmpCount.")'/> </td>
              </tr>";
          $tmpCount ++;
    }
    } else {
    echo "0 results";
  }
  echo "</table>";
  $conn->close();
}

function deleteEmployee(){
  echo "delete employee php hi";
}
?>
