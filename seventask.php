<?php
session_start();
if(isset($_POST['username'])){

$_SESSION['user1']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
$check = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($check as $x => $x_value) {
if($_SESSION['user1']==$x && $_SESSION['password']==$x_value)
{

  header('location:1.php');
  break;
}
else {
  echo "<h2>Incorrect details</h2>";
  include('seven.php');
  break;
}
}
}
else {
    echo "<h2>Incorrect details</h2>";
  include('seven.php');
}


 ?>
