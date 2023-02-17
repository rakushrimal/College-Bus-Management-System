<?php

	require_once('connection.php');
	
	if(isset($_POST['submit']))
	{
		
		$BusNo =mysqli_real_escape_string($con,$_POST['BusNo']);
		$DriverName =mysqli_real_escape_string($con,$_POST['Dname']);
		$RootLocation =mysqli_real_escape_string($con,$_POST['Rlocation']);
		$Destination =mysqli_real_escape_string($con,$_POST['Dest']);
		$MorningStartingTime =mysqli_real_escape_string($con,$_POST['MST']);
		$EveningStartingTime =mysqli_real_escape_string($con,$_POST['EST']);

			$sql = "insert into schentries (BusNo,DriverName,RootLocation,Destination,MorningStartingTime,EveningStartingTime) values('$BusNo','$DriverName','$RootLocation','$Destination','$MorningStartingTime','$EveningStartingTime')";
			$result = mysqli_query($con, $sql);
			
			if($result)
			{
				header("refresh:1; url=scdataadd.php");			
			}
			else
			{
				echo ' Please Check Your Query';
			}
		
	}	
?>
