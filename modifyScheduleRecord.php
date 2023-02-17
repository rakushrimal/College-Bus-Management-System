<?php
	
	require_once('connection.php');
	
	//Modify Query	
	$sql = "UPDATE schentries SET BusNo='$_POST[BusNo]',DriverName='$_POST[Dname]', RootLocation='$_POST[Rlocation]',Destination='$_POST[Dest]',MorningStartingTime='$_POST[MST]',EveningStartingTime='$_POST[EST]' WHERE ID='$_POST[id]'";
	//Execute the query	
	if(mysqli_query($con,$sql))
		header("refresh:1; url=scdatamodify.php");
	else
		echo "UNABLE TO Modify RECORDS";
?>
