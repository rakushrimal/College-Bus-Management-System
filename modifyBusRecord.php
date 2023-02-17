<?php
	
	require_once('connection.php');
	
	//Modify Query	
	$sql = "UPDATE busentries SET BusID='$_POST[BusID]',BusNo='$_POST[BusNo]', DriverName='$_POST[Dname]',MorningStartingTime='$_POST[MST]',MorningStartingLocation='$_POST[MSL]',EveningStartingTime='$_POST[EST]',EveningStartingLocation='$_POST[ESL]',Destination='$_POST[Dest]' WHERE ID='$_POST[id]'";
	//Execute the query	
	if(mysqli_query($con,$sql))
		header("refresh:1; url=bdatamodify.php");
	else
		echo "UNABLE TO Modify RECORDS";
?>
