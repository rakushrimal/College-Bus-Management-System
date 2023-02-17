<?php

	require_once('connection.php');
	
	if(isset($_POST['submit']))
	{
		$BusID =mysqli_real_escape_string($con,$_POST['BusID']);
		$BusNo =mysqli_real_escape_string($con,$_POST['BusNo']);
		$DriverName =mysqli_real_escape_string($con,$_POST['Dname']);
		$MorningStartingTime =mysqli_real_escape_string($con,$_POST['MST']);
		$MorningStartingLocation =mysqli_real_escape_string($con,$_POST['MSL']);
		$EveningStartingTime =mysqli_real_escape_string($con,$_POST['EST']);
		$EveningStartingLocation =mysqli_real_escape_string($con,$_POST['ESL']);
		$Destination =mysqli_real_escape_string($con,$_POST['Dest']);

			$sql = "insert into busentries (BusID,BusNo,DriverName,MorningStartingTime,MorningStartingLocation,EveningStartingTime,EveningStartingLocation,Destination) values('$BusID','$BusNo','$DriverName','$MorningStartingTime','$MorningStartingLocation','$EveningStartingTime','$EveningStartingLocation','$Destination')";
			
			$result = mysqli_query($con, $sql);
			
			if($result)
			{
				header("refresh:1; url=bdataadd.php");			
			}
			else
			{
				echo ' Please Check Your Query';
			}
		
	}	
?>
