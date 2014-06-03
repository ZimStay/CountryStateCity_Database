<!-- ==============================================
//  Created by PHP Dev Zone           			 ||
//	http://php-dev-zone.blogspot.com             ||
//  Contact for any Web Development Stuff        ||
//  Email: ketan32.patel@gmail.com     			 ||
//=============================================-->


<?php $country=intval($_GET['country']);
$con = mysql_connect('us-cdbr-azure-west-a.cloudapp.net', 'b39da717b5b468', '26d08d6c'); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('cscdb');
$query="SELECT state_id,state FROM state WHERE country_id='$country'";
$result=mysql_query($query);

?>
<select name="state" onchange="getCity(<?php echo $country?>,this.value)">
<option>Select State</option>
<?php while ($row=mysql_fetch_array($result)) { ?>
<option value=<?php echo $row['state_id']?>><?php echo $row['state']?></option>
<?php } ?>
</select>
