<?php
$conn = mysqli_connect("localhost","root","root","mydb");
$aptid=$_POST['name'];
$slotid=$_POST['slot'];
if (!$conn)
  echo "no connection";
else{


 $sql = "update usertable set slot_slotid = {$slotid} where aptid= '{$aptid}'";
 $sql2="update slot set status= true where slotid={$slotid} ";
   $result=mysqli_query($conn,$sql);
   $result2=mysqli_query($conn,$sql2);
	if(!$result){
		echo "error";
		
	}
	else{
		echo "you schedule was reserved";
	}
}



//if slot slot is not null the user should not be able to update any record i need to create one more php that will cheack if users id have slot slot id field null if yes he can do stuff if no sorry than i do not need to add more php i can do in update add if statment before querly if select slot id from user table where aptid is equal this is not null than echo you already piked your slot will be good if i echo the choosed time
// if i leave as it is person will be able to change anytime hiw schedule and his slot will be last time choosed slot so i need to fix that i can do it as i described in previus line
?>
