<html>
<head>
<title>***View Records***</title>
</head>
<body>

	<?php

	require_once('connection.php');
	
	//Select Query	
	$sql = "SELECT * FROM busentries";

	//Execute the query	
	$records = mysqli_query($con,$sql);
?>
<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>Bus ID</th>
		<th>Bus No</th>
		<th>Driver Name</th>
		<th>Morning Starting Time</th>
		<th>Morning Starting Location</th>
		<th>Evening Starting Time</th>
		<th>Evening Starting Location</th>
		<th>Destination</th>
		
		
	</tr>

<?php
	while($row = mysqli_fetch_array($records))
	{
		
		echo "<td><input type=text name=BusID value='".$row['BusID']."'></td>";
		echo "<td><input type=text name=BusNo value='".$row['BusNo']."'></td>";
		echo "<td><input type=text name=Dname value='".$row['DriverName']."'></td>";
		echo "<td><input type=text name=MST value='".$row['MorningStartingTime']."'></td>";
		echo "<td><input type=text name=MSL value='".$row['MorningStartingLocation']."'></td>";
		echo "<td><input type=text name=EST value='".$row['EveningStartingTime']."'></td>";
		echo "<td><input type=text name=ESL value='".$row['EveningStartingLocation']."'></td>";
		echo "<td><input type=text name=Dest value='".$row['Destination']."'></td>";		
		echo "<input type=hidden name=id value='".$row['ID']."'>";
		
		echo "</form></tr>";
		
	}
		
?>

</table>
</body>
</html>
