<?php

	require_once('connection.php');
	
	if(isset($_POST['submit']))
	{
		
		$Feedback =mysqli_real_escape_string($con,$_POST['F1']);
		
	
			$sql = "insert into feedback (Feedback) values('$Feedback')";
			$result = mysqli_query($con, $sql);
			
			if($result)
			{
				header("refresh:1; url=feedback.php");			
			}
			else
			{
				echo ' Please Check Your Query';
			}
		
	}	
?>
