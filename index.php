<?php
		require_once('Connections/srads.php'); 
	///// Select Country/City/State
	mysql_select_db($database_srads, $srads);
	$query="SELECT * FROM countries,";
 	$result = mysql_query($query, $srads) or die(mysql_error());
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>CountryStateCity Database</title>

<!-- Select Country/State/City combo boxes -->
<script type="text/javascript" src="js/country_state_city.js"></script>
</head>

<body>

<h1>CountryStateCity Database</h1>

<div class="formRow">
        	<div class="grid3">
    			<label for="country">Country:<span class="req">*</span></label>
            </div>
            <div class="grid9">
    			<select name="country" onChange="getState(this.value)" class="validate[required]">
                    <option>Select Country</option>
                    <?php while ($row=mysql_fetch_array($result)) { ?>
                    <option value=<?php echo $row['code']?>><?php echo $row['name']?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        
        <div class="formRow">
        	<div class="grid3">
    			<label for="state">Region/State:<span class="req">*</span></label>
            </div>
            <div class="grid9" id="statediv">
    			<select name="state" class="validate[required]">
            		<option>Select State</option>
                </select>
            </div>
        </div>
        
        <div class="formRow">
        	<div class="grid3">
    			<label for="city">City:<span class="req">*</span></label>
            </div>
            <div class="grid9" id="citydiv">
    			<select name="city" class="validate[required]">
            		<option>Select City</option>
                </select>
            </div>
        </div>
</body>
</html>
