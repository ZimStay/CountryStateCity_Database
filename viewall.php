<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Back-End</title>
</head>

<body>
<form method="post">
<table>

	<tr>
		<td>Country Code</td>
		<td><input type="text" name="code" /></td>
	</tr>
	<tr>
		<td>Country</td>
		<td><input type="text" name="country" /></td>
	</tr>
	<tr>
		<td>City</td>
		<td><input type="text" name="city" /></td>
	</tr>
	<tr>
		<td>State</td>
		<td><input type="text" name="state" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="add" /></td>
	</tr>
</table>
<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$code=$_POST['code'] ;
					$country= $_POST['country'] ;					
					$city=$_POST['city'] ;
					$state=$_POST['state'] ;
												
		 mysql_query("INSERT INTO `cities` VALUES ('$code','$country','$city','$state')"); 
				
				
	        }
?>
</form>
<table border="1">
	
			<?php
			include("db.php");
			
			$result=mysql_query"SELECT countries.ID, countries.name, cities.ID, cities.name,cities.region,regions.ID,regions.name
					FROM cities
					INNER JOIN countries ON countries.ID=cities.ID
					INNER JOIN regions ON cities.regions=regions.ID";
			
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['cities.ID'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['countries.name']."</font></td>";
				echo"<td><font color='black'>" .$test['cities.name']."</font></td>";
				echo"<td><font color='black'>". $test['states.name']. "</font></td>";
				echo"<td> <a href ='view.php?ID=$id'>Edit</a>";
				echo"<td> <a href ='del.php?ID=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysql_close($conn);
			?>
</table>

</body>
</html>
