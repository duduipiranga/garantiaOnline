<?php
/**
 * Função que pega o total de sg pedentes abertas por usuario
 * @return int - TOtal de registros de sg pendentes
 */
function getTotalSgPendente() {
	$query = mysql_query("SELECT COUNT(id) as total FROM garantias WHERE status = 0 AND id_user = $_SESSION[id]") or die("Erro:"+ mysql_error());
	$linha = mysql_fetch_array($query);
	$_SESSION['totalSgPendente'] = $linha['total'];
	return $linha['total'];
}
/**
 * Função que pega o total de sg concluido abertas por usuario
 * @return int - TOtal de registros de sg concluido
 */
function getTotalSgConcluido() {
	$query = mysql_query("SELECT COUNT(id) as total FROM garantias WHERE status = 1 AND id_user = $_SESSION[id]") or die("Erro:"+ mysql_error());
	$linha = mysql_fetch_array($query);
	$_SESSION['totalSgConcluido'] = $linha['total'];
	return $linha['total'];
}

function getList10Pendente() {
	$sql = "SELECT id,tipoprod FROM garantias WHERE status = 0 AND id_user = $_SESSION[id] LIMIT 10";
	$query = mysql_query($sql) or die("Erro:"+ mysql_error());
	return $query;
}
function getList10Concluida() {
	$sql = "SELECT id,tipoprod FROM garantias WHERE status = 1 AND id_user = $_SESSION[id] LIMIT 10";
	$query = mysql_query($sql) or die("Erro:"+ mysql_error());
	return $query;
}
?>
