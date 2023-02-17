<?php

	require_once('connection.php');		
	
	if(isset($_POST['btn-login']))
	{
		$Uname = $_POST['UserName'];
		$Pass = $_POST['Password'];

		if(empty($Uname) || empty($Pass))
		{
			echo ' Please Fill in the Blanks ';
		}
		else
		{
			$query = " select * from system where Uname='$Uname' or Email='$Uname'";
			$result = mysqli_query($con,$query);

			if($row=mysqli_fetch_assoc($result))
			{
				$db_password = $row['Password'];
		
				if(md5($Pass) == $db_password)
				{
					header("location:admin.php");				
				}
				else
				{
					echo ' Incorrect Password ';		
				}
						
			}
			else
			{
				echo ' Please Check Your Query ';			
			}		
		}	
	}
?>
