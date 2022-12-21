
<?php

$conn = mysqli_connect("localhost","root","root","mydb");
if (!$conn)
  echo "no connection";
else{

  $aptid=$_POST['cheackAptId'];
  $password = $_POST['cheackpassword'];
  $sql="SELECT aptid,password FROM usertable WHERE aptid='$aptid' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {
   echo '<script type="text/javascript">';
    echo 'alert("You are logged in!)';
    echo '</script>';
  include_once('listing_av.php');
  } else {
	
	echo '<script type="text/javascript">';
    echo "alert('Your username or passowrd is incorrect.')";
    echo '</script>';
	  include_once('Create_Account_Or_Login (1).html');

  }
}




?>