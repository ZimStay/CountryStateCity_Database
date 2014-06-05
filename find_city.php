<?php 
	require_once('Connections/srads.php'); 
?>
<?php 
	$countryId=intval($_GET['country']);
	$stateId=intval($_GET['state']);
	
	///// Select Country/City/State
	mysql_select_db($database_srads, $srads);
	$query="SELECT id,city_name FROM city WHERE state_id='$stateId'";
 	$result = mysql_query($query, $srads) or die(mysql_error());
?>
<select name="cities" class="select">
<option>Select City</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['ID']?>"><?php echo $row['city_name']?></option>
<?php } ?>
</select>
