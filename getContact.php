<?php

$db_host = "d5x4ae6ze2og6sjo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$db_name = "h4nidlkqgtgn6p4s";
$db_user = "qqo3bpj3e1gsobe2";
$db_password = "uyrgo30r53ycqtt8";
$connection = mysqli_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysqli_error());
mysqli_select_db($db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
@mysqli_query("SET NAMES 'utf8'");

if(isset($_POST["id_contacto"])){

$id_contacto = $_POST["id_contacto"];
$sql_query = "SELECT * FROM contactos WHERE id_contacto=$id_contacto;";
$result = mysqli_query($sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
$rows[] = $r;
}
print json_encode($rows);
}else
echo "No existe el contacto";
mysqli_close($connection);
?>