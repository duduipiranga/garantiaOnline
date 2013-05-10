<?php
require("Connections/conexao.php");

if(array_key_exists('cnpj', $_POST)=="TRUE"){
	$cnpj = $_POST['cnpj'];
	$query = mysql_query("SELECT cnpj FROM user WHERE cnpj = '$cnpj'") or die(mysql_error());
	$total = mysql_num_rows($query);
	if($total == 0) {
		echo 0;	
	} else {
		echo 1;
	}
}
?>