<html>
<head>
<title>***Modify Records***</title>
</head>
<body>

	<?php

	require_once('connection.php');
	
	//Select Query	
	$sql = "SELECT * FROM entries";

	//Execute the query	
	$records = mysqli_query($con,$sql);
?>
<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>Name</th>
		<th>Reg ID</th>
		<th>Email</th>
		<th>Department</th>
		<th>Bus ID</th>
		<th>Bus No</th>
		<th>Destination</th>
		
	</tr>

<?php
	while($row = mysqli_fetch_array($records))
	{
		echo "<tr><form action=modifyStudentRecord.php method=post>";
		echo "<td><input type=text name=Name value='".$row['Name']."'></td>";
		echo "<td><input type=text name=RegID value='".$row['RegID']."'></td>";
		echo "<td><input type=text name=Email value='".$row['Email']."'></td>";
		echo "<td><input type=text name=Dept value='".$row['Department']."'></td>";
		echo "<td><input type=text name=BusID value='".$row['BusID']."'></td>";
		echo "<td><input type=text name=BusNo value='".$row['BusNo']."'></td>";
		echo "<td><input type=text name=Dest value='".$row['Destination']."'></td>";
		echo "<input type=hidden name=id value='".$row['ID']."'>";
		echo "<td><input type=Submit>";
		echo "</form></tr>";
		
	}
		
?>

</table>
</body>
</html>
