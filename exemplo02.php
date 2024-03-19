/* Iniciando sessão */

<?php 

	session_start();

	$_SESSION['nome'] = 'Senac Largo Treze';

	echo "Bem vindo a sessão " . $_SESSION['nome'] . 'seu id ' . session_id();

?>