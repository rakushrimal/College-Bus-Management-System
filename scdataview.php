<html>
<head>
<title>***View Records***</title>
</head>
<body>

	<?php

	require_once('connection.php');
	
	//Select Query	
	$sql = "SELECT * FROM schentries";

	//Execute the query	
	$records = mysqli_query($con,$sql);
?>
<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>Bus No</th>
		<th>Driver Name</th>
		<th>Root Location</th>
		<th>Destination</th>
		<th>Morning Starting Time</th>
		<th>Evening Starting Time</th>
		
		
	</tr>

<?php
	while($row = mysqli_fetch_array($records))
	{
		
		echo "<td><input type=text name=BusNo value='".$row['BusNo']."'></td>";
		echo "<td><input type=text name=Dname value='".$row['DriverName']."'></td>";
		echo "<td><input type=text name=Rlocation value='".$row['RootLocation']."'></td>";
		echo "<td><input type=text name=Dest value='".$row['Destination']."'></td>";
		echo "<td><input type=text name=MST value='".$row['MorningStartingTime']."'></td>";
		echo "<td><input type=text name=EST value='".$row['EveningStartingTime']."'></td>";
		echo "<input type=hidden name=id value='".$row['ID']."'>";
		
		echo "</form></tr>";
		
	}
		
?>

</table>
</body>
</html>
