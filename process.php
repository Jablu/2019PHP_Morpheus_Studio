<?php

require_once 'db_constants.php';
$mysqli = new mysqli($servername, $username, $password, $dbname) or die($mysqli->error());

  if(isset($_GET['delete'])){
    $psid = $_GET['delete'];
    $mysqli->query("DELETE FROM employee WHERE psid=$psid") or die($mysqli->error());
    $_SESSION['message'] = "Record Deleted Successfully";
    $_SESSION['msg_type'] = "Success";
    header("location: index.php");
  }
 ?>
