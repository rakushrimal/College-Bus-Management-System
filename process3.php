<?php

	require_once('connection.php');
	
	if(isset($_POST['submit']))
	{
		$Name =mysqli_real_escape_string($con,$_POST['Name']);
		$RegNo =mysqli_real_escape_string($con,$_POST['Reg']);
		$Email =mysqli_real_escape_string($con,$_POST['Email']);
		$Department =mysqli_real_escape_string($con,$_POST['Dept']);
		$BUSID =mysqli_real_escape_string($con,$_POST['BusID']);
		$BUSNumber =mysqli_real_escape_string($con,$_POST['BusNo']);
		$Destination =mysqli_real_escape_string($con,$_POST['Dest']);
		
		if(empty($Name) || empty($RegNo ) || empty($Email) || empty($Department) || empty($BUSID) || empty($BUSNumber) || empty($Destination))
		{
			echo 'Please fill in the blanks ';		
		}

	
		else
		{
			
			$sql = "insert into entries (Name,RegID,Email,Department,BusID,BusNo,Destination) values('$Name','$RegNo','$Email','$Department','$BUSID','$BUSNumber','$Destination')";
			$result = mysqli_query($con, $sql);
			
			if($result)
			{
				header("refresh:1; url=sdataadd.php");			
			}
			else
			{
				echo ' Please Check Your Query';
			}
		}
	}	
?>
