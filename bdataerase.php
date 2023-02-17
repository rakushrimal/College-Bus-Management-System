<html>
<head>
<title>***Delete Records***</title>
</head>
<body>
<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>Bus ID</th>
		<th>Bus No.</th>
		<th>Driver name</th>
		<th>Morning Starting Time</th>
		<th>Morning Starting Location</th>
		<th>Evening Starting Time</th>
		<th>Evening Starting Location</th>
		<th>Destination</th>
	</tr>
	<?php

	require_once('connection.php');
	
	//Select Query	
	$sql = "SELECT * FROM busentries";

	//Execute the query	
	$records = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($records))
	{
		echo "<tr>";
		echo "<td>".$row['BusID']."</td>";
		echo "<td>".$row['BusNo']."</td>";
		echo "<td>".$row['DriverName']."</td>";
		echo "<td>".$row['MorningStartingTime']."</td>";
		echo "<td>".$row['MorningStartingLocation']."</td>";
		echo "<td>".$row['EveningStartingTime']."</td>";
		echo "<td>".$row['EveningStartingLocation']."</td>";
		echo "<td>".$row['Destination']."</td>";
		echo "<td><a href=deleteBusRecord.php?id=".$row['ID'].">Delete</a></td>";
		
	}
		

	?>

</table>
</body>
</html>
