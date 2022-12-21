
<html>
<style>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="scheduleCssFom.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
</head>
</style>
<body>
<div class="wrapper">
<style>
      <?php
      echo " <div class='{
    max-width: 1000px;
    margin: 0px auto;
    box-shadow: 10px 15px 20px rgba(0, 0, 0, .1);
    display: flex;
}'>";
?>
</style>
            <div class="container-date">
                <h2 class="heading"> Welcome to CSC350 Laundry </h2>
                <hr>
                <h3 class="heading-days"> We are open 7/24</h3>
                <h4>Notice:</h4>
                <p>Each apartment has two (2) hours of use every week. </p><p>Thank you for booking your time spot!</p>
                <hr>
           

            </div>
			</div>
			
<div class="container-form">
<?php
$conn=mysqli_connect("localhost","root","root","mydb");

echo "<p><b>you are allowed to sign up for one time slot</b><p>";
echo "select avaliable time slot";
// i have aprt id now i can update sql
		$aptid=$_POST['cheackAptId'];

		  
		  
	  
if(!$conn)
	echo "No Connection to databse";

else

$sql1="select aptid from usertable where slot_slotid is NULL;";		
      $result1=mysqli_query($conn,$sql1);
      while ($row = mysqli_fetch_assoc($result1)) {
		  if($row['aptid'] == $aptid){ //$aptid is coming from login php and $row['aptid '] is from back end


	$sql="select freeslot,day,slotid from slot where status = 0;";
	$result=mysqli_query($conn,$sql);
	if(!$result){
	echo "eRoR";}
    else
	{
		if(mysqli_num_rows($result)>0)
		{
		
		echo "<html>";
      	echo "<form action = 'update.php' method='post'>";
		echo "<select name = 'slot'>";
	    while($row=mysqli_fetch_assoc($result)){
			echo "<option value='".$row["slotid"]."' n>".$row["freeslot"].$row["day"]."</option>";
		}
		echo "</select>";
        echo "<input type='hidden' name='name' value='$aptid'>";
		echo "<p><input type='submit' value='insert'></p>";
		echo "</form>";
		echo "</html>";
		} else{
		echo "no data";
		}
		
	 while($row1=mysqli_fetch_assoc($result)){
				    echo "".$row1["slotid"]."";
				}
	
}


}

		  }

?>
</div>
</div>
</body>


</html>