<?php
	
	require_once('connection.php');
	
	//Select Query	
	$sql = "DELETE FROM entries WHERE ID='$_GET[id]'";

	//Execute the query	
	if(mysqli_query($con,$sql))
		header("refresh:1; url=sdataerase.php");
	else
		echo "UNABLE TO DELETE RECORDS";
?>
