<link rel="stylesheet" type="text/css" href="theme1.css">
<?php
  require_once 'db_constants.php';
  require_once 'process.php';
  if(isset($_SESSION['message'])):
?>
  <p class='ConfirmText'>
    <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    ?>
  </p>
<?php
  endif ?>
<?php
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM employee";
  $result = $conn->query($sql);
?>

<div class='RightPanel'>
  <table class='RightPanelTable'>
  <thead>
  <tr>
    <th colspan='2'>Actions</th>
    <th>PSID</th>
    <th>Name</th>
    <th>Email Id</th>
    <th>Phone Number</th>
    <th>Salary</th>
    <th>Date of Birth</th>
  </tr>
  </thead>
  <?php
    while ($row = $result->fetch_assoc()) :?>
      <tr>
        <td>
            <a href="retrivedata.php?edit=<?php echo $row["psid"];?>">
              <img src = 'save2.png' class='rowIcon' onclick='SayHi(".$tmpCount.")'/>
            </a>
        </td>
        <td>
            <a href="process.php?delete=<?php echo $row["psid"];?>">
              <img src = 'delete2.png' class='rowIcon' onclick='SayHi(".$tmpCount.")'/>
            </a>
        </td>



        <td contenteditable="true"><?php echo $row["psid"]; ?></td>
        <td><?php echo $row["first_name"]." ".$row["last_name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td><?php echo $row["salary"]; ?></td>
        <td><?php echo $row["dob"]; ?></td>
  <?php endwhile; ?>

</table>
</div>
