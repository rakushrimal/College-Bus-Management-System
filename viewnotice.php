<html>
<head>
<title>***View Notice***</title>
</head>
<body>

	<?php

	require_once('connection.php');
	
	//Select Query	
	$sql = "SELECT * FROM notice";

	//Execute the query	
	$records = mysqli_query($con,$sql);
?>
<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>Notice1</th>
		<th>Notice2</th>
		<th>Notice3</th>
		
		
	</tr>

<?php
	while($row = mysqli_fetch_array($records))
	{
		
		echo "<td><input type=text name=N1 value='".$row['Notice1']."'></td>";
		echo "<td><input type=text name=N2 value='".$row['Notice2']."'></td>";
		echo "<td><input type=text name=N3 value='".$row['Notice3']."'></td>";
	
		echo "<input type=hidden name=id value='".$row['ID']."'>";
		
		echo "</form></tr>";
		
	}
		
?>

</table>
</body>
</html>
