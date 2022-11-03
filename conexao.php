<?php
	require "config.php";

	$conexao = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
	mysqli_select_db($conexao, DATABASE);
?>
