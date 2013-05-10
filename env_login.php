<?php
session_start();
require_once("Connections/conexao.php");
$login = $_POST['email'];
$senha = $_POST['senha'];

$consulta = "select id,login,senha,razao_social from user where login='$login' and senha='$senha'";
$resultado = mysql_query($consulta) or die(mysql_error());
$linha = mysql_num_rows($resultado);
//echo $consulta;
if($linha==0){
	echo "1";
} else{
	$escreve = mysql_fetch_array($resultado);
	$_SESSION['id'] = $escreve['id'];
	$_SESSION['login'] = $escreve['login'];
	$_SESSION['razao_social'] = $escreve['razao_social'];
	$_SESSION['logado'] = 1;
	echo "0";	
}
?>