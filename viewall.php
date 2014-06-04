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
												
		 mysql_query("INSERT INTO `books`(Title,Author,PublisherName,CopyrightYear) 
		 VALUES ('$code','$country','$city','$state')"); 
				
				
	        }
?>
</form>
<table border="1">
	
			<?php
			include("db.php");
			
				
			$result=mysql_query("SELECT code,name FROM countries");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['ID'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['ID']."</font></td>";
				echo"<td><font color='black'>" .$test['name']."</font></td>";
				echo"<td><font color='black'>". $test['Author']. "</font></td>";
				echo"<td><font color='black'>". $test['PublisherName']. "</font></td>";
				echo"<td><font color='black'>". $test['CopyrightYear']. "</font></td>";	
				echo"<td> <a href ='view.php?BookID=$id'>Edit</a>";
				echo"<td> <a href ='del.php?BookID=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysql_close($conn);
			?>
</table>

</body>
</html>
