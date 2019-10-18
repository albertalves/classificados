<?php
session_start();

global $pdo;
try {
	$pdo = new PDO("mysql:dbname=u259295667_projetos;host=localhost", "u259295667_alb", "091018");
} catch(PDOException $e) {
	echo "FALHOU: ".$e->getMessage();
	exit;
}
?>