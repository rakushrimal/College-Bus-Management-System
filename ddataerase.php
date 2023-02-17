<html>
<head>
<title>***Delete Records***</title>
</head>
<body>
<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>Name</th>
		<th>Driver ID</th>
		<th>Email</th>
		<th>Phone No</th>
		<th>Bus ID</th>
		<th>Bus No</th>
		<th>Root location</th>
		<th>Delete</th>
	</tr>
	<?php

	require_once('connection.php');
	
	//Select Query	
	$sql = "SELECT * FROM dentries";

	//Execute the query	
	$records = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($records))
	{
		echo "<tr>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['DriverID']."</td>";
		echo "<td>".$row['Email']."</td>";
		echo "<td>".$row['PhoneNo']."</td>";
		echo "<td>".$row['BusID']."</td>";
		echo "<td>".$row['BusNo']."</td>";
		echo "<td>".$row['Rootlocation']."</td>";
		echo "<td><a href=deleteDriverRecord.php?id=".$row['ID'].">Delete</a></td>";
		
	}
		

	?>

</table>
</body>
</html>
