<?php 
	require_once('Connections/srads.php'); 
?>
<?php 
	$countryId=intval($_GET['country']);
	$stateId=intval($_GET['state']);
	
	///// Select Country/City/State
	mysql_select_db($database_srads, $srads);
	$query="SELECT city_id,city FROM city WHERE country_id='$countryId' AND state_id='$stateId'";
 	$result = mysql_query($query, $srads) or die(mysql_error());
?>
<select name="city" class="select">
<option>Select City</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['city_id']?>"><?php echo $row['city']?></option>
<?php } ?>
</select>
