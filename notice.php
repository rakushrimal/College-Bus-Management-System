<html>
<head><title>Notice Board</title></head>
<body background="srm.webp"><marquee> <h2>Admin</h2></marquee>
	<br><table bgcolor="white" border="1" width="500" height="610" align="center">
		<tr><td colspan="5" align="center"><h2>Today`s Notice</h2></td></tr>
	<form action="addnotice.php" method="post">	
	<tr>
		<td align="right">Notice 1:</td><td><input type="text" name="N1"></td>
	</tr>
	<tr>
		<td align="right">Notice 2:</td><td><input type="text" name="N2"></td>
	</tr>
	<tr>
		<td align="right">Notice 3:</td><td><input type="text" name="N3"></td>
	</tr>

	<tr><td colspan="5" align="center">
	 
	 <input type="submit" style="height: 30px;width:90px" name="submit" value="Add notice">
</form></td></tr>
<tr><td  colspan="5" align="center">
	<form action="editnotice.php">
	 
	 <input type="submit" style="height: 30px;width:90px" name="submit" value="Edit notice">
</form></td></tr>
	<tr><td colspan="5" align="center">
<form action="admin.php">
	 
	 <input type="submit" style="height: 30px;width:70px" name="submit" value="Back">
</form></td></tr>

</table></body></html>
