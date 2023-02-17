<?php

	require_once('connection.php');		
	
	if(isset($_POST['btn-login']))
	{
		$Name = $_POST['Name'];
		

		if(empty($Name))
		{
			echo ' Please Fill in the Blanks ';
		}
		else
		{
			$query = " select * from entries where Name='$Name'";
			$query1 = " select * from dentries where Name='$Name'";			
			$result = mysqli_query($con,$query);
			$result1 = mysqli_query($con,$query1);
			

			if($row=mysqli_fetch_assoc($result) || mysqli_fetch_assoc($result1))
			{
			
					header("location:user.php");				
					
			}
			else
			{
				echo ' Please Check Your Query ';			
			}		
		}	
	}
?>
