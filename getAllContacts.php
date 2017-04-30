<?php

$db_host = "d5x4ae6ze2og6sjo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$db_name = "h4nidlkqgtgn6p4s";
$db_user = "qqo3bpj3e1gsobe2";
$db_password = "uyrgo30r53ycqtt8";
    
     $connection = mysql_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysql_error());
    
mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
    @mysql_query("SET NAMES 'utf8'");

$sql_query = "SELECT * FROM contactos;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);

?>