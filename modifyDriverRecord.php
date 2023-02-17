<?php
	
	require_once('connection.php');
	
	//Modify Query	
	$sql = "UPDATE dentries SET Name='$_POST[Name]',DriverID='$_POST[DriverID]', Email='$_POST[Email]',PhoneNo='$_POST[PHNO]',BusID='$_POST[BusID]',BusNo='$_POST[BusNo]',Rootlocation='$_POST[Rlocation]' WHERE ID='$_POST[id]'";
	//Execute the query	
	if(mysqli_query($con,$sql))
		header("refresh:1; url=ddatamodify.php");
	else
		echo "UNABLE TO Modify RECORDS";
?>
