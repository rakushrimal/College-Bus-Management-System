<?php

	require_once('connection.php');
	
	if(isset($_POST['submit']))
	{
		
		$Notice1 =mysqli_real_escape_string($con,$_POST['N1']);
		$Notice2 =mysqli_real_escape_string($con,$_POST['N2']);
		$Notice3 =mysqli_real_escape_string($con,$_POST['N3']);
	
			$sql = "insert into notice (Notice1,Notice2,Notice3) values('$Notice1','$Notice2','$Notice3')";
			$result = mysqli_query($con, $sql);
			
			if($result)
			{
				header("refresh:1; url=notice.php");			
			}
			else
			{
				echo ' Please Check Your Query';
			}
		
	}	
?>
