<!-- ==============================================
//  Created by PHP Dev Zone           			 ||
//	http://php-dev-zone.blogspot.com             ||
//  Contact for any Web Development Stuff        ||
//  Email: ketan32.patel@gmail.com     			 ||
//=============================================-->


<?php $countryid=($_GET['country']);
$con = mysql_connect("us-cdbr-azure-west-a.cloudapp.net", "b39da717b5b468", '26d08d6c'); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('cscdb');
$query="SELECT id,state_name FROM state WHERE country_id='$countryid'";
$result=mysql_query($query);
if (!$result)die
?>
<select name="state" onchange="getCity(<?php echo $countryid?>,this.value)">
<option>Select State</option>
<?php while ($row=mysql_fetch_array($result)) { ?>
<option value=<?php echo $row['id']?>><?php echo $row['state_name']?></option>
<?php } ?>
</select>
