<html>
<head><title>Schedule Detail</title></head>
<body background="srm.webp"><marquee> <h2>Admin</h2></marquee>
	<br><table bgcolor="white" border="1" width="500" height="610" align="center">
		<tr><td colspan="5" align="center"><h2>Add Schedule Details</h2></td></tr>
	<form action="process5.php" method="post">	
	<tr>
		<td align="right">Bus ID:</td><td><input type="text" name="BusID"></td>
	</tr>
	<tr>
		<td align="right">Bus no.:</td><td><input type="text" name="BusNo"></td>
	</tr>
	<tr>
		<td align="right">Driver name:</td><td><input type="text" name="Dname"></td>
	</tr>
	<tr>
		<td align="right">Root location:</td><td><input type="text" name="Rlocation"></td>
	</tr>
	
	<tr>
		<td align="right">Destination:</td><td><input type="text" name="Dest"></td>
	</tr>
	<tr>
		<td align="right">Morning Starting Time:</td><td><input type="text" name="MST"></td>
	</tr>
	<tr>
		<td align="right">Evening Starting Time:</td><td><input type="text" name="EST"></td>
	</tr>
	<tr><td colspan="5" align="center">


	 
	 <input type="submit" style="height: 30px;width:90px" name="submit" value="Add record">
</form></td></tr>
	<tr><td colspan="5" align="center">
<form action="schedule.php">
	 
	 <input type="submit" style="height: 30px;width:70px" name="submit" value="Back">
</form></td></tr>

</table></body></html>
