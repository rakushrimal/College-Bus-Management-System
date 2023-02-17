<?php
	
	require_once('connection.php');
	
	//Modify Query	
	$sql = "UPDATE entries SET Name='$_POST[Name]',RegID='$_POST[RegID]', Email='$_POST[Email]',Department='$_POST[Dept]',BusID='$_POST[BusID]',BusNo='$_POST[BusNo]',Destination='$_POST[Dest]' WHERE ID='$_POST[id]'";
	//Execute the query	
	if(mysqli_query($con,$sql))
		header("refresh:1; url=sdatamodify.php");
	else
		echo "UNABLE TO Modify RECORDS";
?>
