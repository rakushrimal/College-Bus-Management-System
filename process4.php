<?php

	require_once('connection.php');
	
	if(isset($_POST['submit']))
	{
		$Name =mysqli_real_escape_string($con,$_POST['Name']);
		$DriverID =mysqli_real_escape_string($con,$_POST['DriverID']);
		$Email =mysqli_real_escape_string($con,$_POST['Email']);
		$Phoneno =mysqli_real_escape_string($con,$_POST['PHNO']);
		$BusID =mysqli_real_escape_string($con,$_POST['BusID']);
		$BusNumber =mysqli_real_escape_string($con,$_POST['BusNo']);
		$RootLocation =mysqli_real_escape_string($con,$_POST['Rlocation']);

			$sql = "insert into dentries (Name,DriverID,Email,PhoneNo,BusID,BusNo,Rootlocation) values('$Name','$DriverID ','$Email','$Phoneno','$BusID','$BusNumber','$RootLocation')";
			$result = mysqli_query($con, $sql);
			
			if($result)
			{
				header("refresh:1; url=ddataadd.php");			
			}
			else
			{
				echo ' Please Check Your Query';
			}
		
	}	
?>
