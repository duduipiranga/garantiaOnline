<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

$hostname_conexao = "localhost";
$database_conexao = "garantiaonline";
$username_conexao = "root";
$password_conexao = "";

/*$hostname_conexao = "localhost";
$database_conexao = "adevivo";
$username_conexao = "root";
$password_conexao = "";*/
$conexao = mysql_pconnect($hostname_conexao, $username_conexao, $password_conexao) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_conexao, $conexao);
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
//Varial dos titulos das paginas
$titulo = "::. Adevivo .:: - Painel Administrativo";
//error_reporting(0);
?>