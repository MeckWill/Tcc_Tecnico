<?php
	header('content-type: text/html; charset=utf-8');					//
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED); 		     //Tira o erro de "Deprecated";
	
	$mysql_connect = mysql_connect('localhost:3306','root','','tcc_fj'); //Faz a conexao com o banco de dados
	
	if(!$mysqlTCC){ 						     //verifica se esta conectando 
		die('Nao foi possivel conectar: '.mysql_error());
	} else {
		echo 'Conexão sucedida!';
	}
	
	mysql_close($mysql_connect); 				            //fechar conexao
?>
