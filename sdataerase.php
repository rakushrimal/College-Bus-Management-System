<html>
<head>
<title>***Delete Records***</title>
</head>
<body>
<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>Name</th>
		<th>Reg ID</th>
		<th>Email</th>
		<th>Department</th>
		<th>Bus ID</th>
		<th>Bus No</th>
		<th>Destination</th>
		<th>Delete</th>
	</tr>
	<?php

	require_once('connection.php');
	
	//Select Query	
	$sql = "SELECT * FROM entries";

	//Execute the query	
	$records = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($records))
	{
		echo "<tr>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['RegID']."</td>";
		echo "<td>".$row['Email']."</td>";
		echo "<td>".$row['Department']."</td>";
		echo "<td>".$row['BusID']."</td>";
		echo "<td>".$row['BusNo']."</td>";
		echo "<td>".$row['Destination']."</td>";
		echo "<td><a href=deleteStudentRecord.php?id=".$row['ID'].">Delete</a></td>";
		
	}
		

	?>

</table>
</body>
</html>
