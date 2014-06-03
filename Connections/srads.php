<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_srads = "us-cdbr-azure-west-a.cloudapp.net";
$database_srads = "cscdb";
$username_srads = "b39da717b5b468";
$password_srads = "26d08d6c";
$srads = mysql_pconnect($hostname_srads, $username_srads, $password_srads) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
