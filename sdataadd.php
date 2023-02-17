<html>
<head><title>Student Detail</title></head>
<body background="srm.webp">
	<br><br><table bgcolor="white" border="1" width="500" height="610" align="center">
		<tr><td colspan="5" align="center"><h2>Add Student Details</h2></td></tr>
	<form action="process3.php" method="post">	
	<tr>
		<td align="right">Name:</td><td><input type="text" name="Name"></td>
	</tr>
	<tr>
		<td align="right">Reg ID:</td><td><input type="text" name="Reg"></td>
	</tr>
	<tr>
		<td align="right">Email:</td><td><input type="email" name="Email"></td>
	</tr>
	<tr>
		<td align="right">Department:</td><td><input type="text" name="Dept"></td>
	</tr>
	<tr>
		<td align="right">Bus ID:</td><td><input type="text" name="BusID"></td>
	</tr>
	<tr>
		<td align="right">Bus no.:</td><td><input type="text" name="BusNo"></td>
	</tr>
	<tr>
		<td align="right">Destination</td><td><input type="text" name="Dest"></td>
	</tr>
	<tr><td colspan="5" align="center">

	 
	 <input type="submit" style="height: 30px;width:90px" name="submit" class="btn" value="Add record">
</form></td></tr>
	<tr><td colspan="5" align="center">
<form action="student.php">
	 
	 <input type="submit" style="height: 30px;width:70px" name="submit" value="Back">
</form></td></tr>

</table></body></html>
