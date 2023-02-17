<html>
<head>
<title>***Modify Records***</title>
</head>
<body>

	<?php

	require_once('connection.php');
	
	//Select Query	
	$sql = "SELECT * FROM dentries";

	//Execute the query	
	$records = mysqli_query($con,$sql);
?>
<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>Name</th>
		<th>Driver ID</th>
		<th>Email</th>
		<th>Phone No</th>
		<th>Bus ID</th>
		<th>Bus No</th>
		<th>Root location</th>
		
	</tr>

<?php
	while($row = mysqli_fetch_array($records))
	{
		echo "<tr><form action=modifyDriverRecord.php method=post>";
		echo "<td><input type=text name=Name value='".$row['Name']."'></td>";
		echo "<td><input type=text name=DriverID value='".$row['DriverID']."'></td>";
		echo "<td><input type=text name=Email value='".$row['Email']."'></td>";
		echo "<td><input type=text name=PHNO value='".$row['PhoneNo']."'></td>";
		echo "<td><input type=text name=BusID value='".$row['BusID']."'></td>";
		echo "<td><input type=text name=BusNo value='".$row['BusNo']."'></td>";
		echo "<td><input type=text name=Rlocation value='".$row['Rootlocation']."'></td>";
		echo "<input type=hidden name=id value='".$row['ID']."'>";
		echo "<td><input type=Submit>";
		echo "</form></tr>";
		
	}
		
?>

</table>
</body>
</html>
