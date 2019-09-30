<?php
/*Essa é usado pra fazer a conexão com o banco*/
	function AbrirConexao(){
		$servidor='localhost';
		$usuario='root';
		$senha='';
		$banco='pipocao';/*colocar o nome do banco*/

		$con=mysql_connect($servidor, $usuario, $senha);
		mysql_select_db($banco);
	}
	
	function FecharConexao(){
		mysql_close();
	}
?>