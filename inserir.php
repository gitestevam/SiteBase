<?php
	include 'conexao.inc.php';/*Aqui é realizado um include para fazer a conexão com o banco*/
	
	/*Aqui é as informações que recebe do "index" da caixa de mensagem*/
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$mensagem=$_POST['mensagem'];
	
	AbrirConexao();
		
		/*Aqui é realizado a query que inseri as informações no banco*/
		$query="INSERT INTO tb_orcamento
					(nome, email, mensagem)
					VALUES(' $nome  ','  $email ',' $mensagem ')";
		$result=mysql_query($query);	
		
	FecharConexao();
	
	header("Location: index.html");
	
	exit;
?>	