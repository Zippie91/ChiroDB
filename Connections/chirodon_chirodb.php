<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_chirodon_chirodb = "localhost";
$database_chirodon_chirodb = "chirodon_chirodb";
$username_chirodon_chirodb = "root";
$password_chirodon_chirodb = "";
$chirodon_chirodb = mysql_pconnect($hostname_chirodon_chirodb, $username_chirodon_chirodb, $password_chirodon_chirodb) or trigger_error(mysql_error(),E_USER_ERROR); 
?>