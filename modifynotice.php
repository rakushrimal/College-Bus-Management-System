<?php
	
	require_once('connection.php');
	
	//Modify Query	
	$sql = "UPDATE notice SET Notice1='$_POST[N1]',Notice2='$_POST[N2]', Notice3='$_POST[N3]'";
	//Execute the query	
	if(mysqli_query($con,$sql))
		header("refresh:1; url=editnotice.php");
	else
		echo "UNABLE TO Modify RECORDS";
?>
