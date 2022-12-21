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
       $aptid=$_POST['cheackAptId'];

   echo '<script type="text/javascript">';
    echo 'alert("You are logged in!)';
    echo '</script>'; 

  //include('listing_av.php');
  include('scheduleFrom.html.html');
  } else {
	
	echo '<script type="text/javascript">';
    echo "alert('Your username or passowrd is incorrect.')";
    echo '</script>';
	  include('index.html');

  }
}
?>