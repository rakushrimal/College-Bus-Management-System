<html>
<head>
<title>***Delete Records***</title>
</head>
<body>
<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>Bus ID</th>
		<th>Bus No</th>
		<th>Driver name</th>
		<th>Root location</th>
		<th>Destination</th>
		<th>Morning Starting Time</th>
		<th>Evening Starting Time</th>
	</tr>
	<?php

	require_once('connection.php');
	
	//Select Query	
	$sql = "SELECT * FROM schentries";

	//Execute the query	
	$records = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($records))
	{
		echo "<tr>";
		echo "<td>".$row['BusNo']."</td>";
		echo "<td>".$row['DriverName']."</td>";
		echo "<td>".$row['RootLocation']."</td>";
		echo "<td>".$row['Destination']."</td>";
		echo "<td>".$row['MorningStartingTime']."</td>";
		echo "<td>".$row['EveningStartingTime']."</td>";
		
		echo "<td><a href=deleteSchduleRecord.php?id=".$row['ID'].">Delete</a></td>";
		
	}
		

	?>

</table>
</body>
</html>
