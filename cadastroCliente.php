<?php
	
	//verifica se conexao.php existe ou foi mudada
	if(file_exists("conexao.php")) 
	{
		require 'conexao.php';
	} 
	else 
	{
		echo "conexao.php nao encontrado";
		exit;
	}
	
	
	$id_pessoa = $_POST[""];
	$id_login = $_POST[""];
	$id_senha = $_POST[""];
	$nome = $_POST[""];
	$rg = $_POST[""];
	$cpf = $_POST[""];
	$data_nasc = $_POST[""];
	$estado = $_POST[""];
	$cidade = $_POST[""];
	$endereco = $_POST[""];
	$telefone = $_POST[""];
	$celular = $_POST[""];
	$email = $_POST[""];
	$escolaridade = $_POST[""];
	$cursos = $_POST[""];
	$experiencias = $_POST[""];
	
	
	
	
	$verificarLogin = "SELECT * FROM pessoas WHERE id_login = $id_login ";
	$executaLogin = mysql_query($verificarLogin);
	
	$verificaCpf = "SELECT * FROM pessoas WHERE  cpf = $cpf ";
	$executaCpf = mysql_query($verificaCpf);
	
	
	
	if($cpf == $executaCpf)
	{
		echo "Cpf ja cadastrado";
	}
	else
	{
		if ($id_login == $executaLogin)
		{
			echo "Senha Existente";
		}
		else
		{
			echo "sucesso";
			$insert = "INSERT INTO pessoas 
			(id_login, id_senha, nome, rg, cpf, data_nascimento, estado, cidade, endereco, telefone, celular, email, escolaridade, cursos, experiencias, sexo)
			VALUES 
			($id_login, $id_senha, $nome, $rg, $cpf, $data_nasc, $estado, $cidade, $endereco, $telefone, $celular, $email, $escolaridade, $cursos, $experiencias, $sexo );";
		
			mysql_query($insert,$mysqlTCC);
		}
	}
	
	
	// libera a variavel da sentença
	mysql_free_result($executaLogin);
	mysql_free_result($executaCpf);
	mysql_close($mysqlTCC);
	
	if(!mysqlTCC)
	{
		echo "desconectado";
	}
	else
	{
		echo "teste";
	}
			
?>