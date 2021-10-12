<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="competicao.css">
	<title>Competição de Natação</title>
</head>
<body>
	
	<form action="#" method="post">
		<fieldset>
			<legend>Competidores</legend>
			
			<li><label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome"><br></li>
			
			<li><label for="idade">Idade:</label>
			<input type="text" name="idade" id="idade"><br></li>
			
			<input type="submit" value="Enviar" id="subm">
			
		</fieldset>
	</form>
	
	<?php
				
		$mensagemErro = isset($_SESSION['mensagem-erro']) ? $_SESSION['mensagem-erro'] : "";
		echo $mensagemErro;
						
	?>
	
	<hr>
<?php

		
	if(empty($_POST['nome'])){
		$_SESSION['mensagem-erro'] = "O nome não pode ser vazio!<br>";
	}
	if(empty($_POST['idade'])){
		$_SESSION['mensagem-erro'] = "A idade não pode ser vazia!<br>";
	}	




if((!empty($_POST['nome'])) && (!empty($_POST['idade']))){
			
		$nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
		$idade = filter_var($_POST['idade'], FILTER_SANITIZE_NUMBER_INT);
		
		echo "Nome: $nome (".gettype($nome).")<br>";
		echo "Idade: $idade (".gettype($idade).")<br>";
				


		switch($idade){
			case ($idade < 6):
				echo "Menores de 6 anos não podem competir!";
				break;
			case ($idade >= 6 && $idade <=12):
				echo "Categoria: Infantil!";
				break;
			case ($idade >= 13 && $idade <=18 ):
				echo "Categoria: Adolescente!";
				break;
			case ($idade > 18):
				echo "Categoria: Adulto!";
				break;
			default:
				echo "Não foi possível definir a categoria!";
				break;
		}			

		unset($_SESSION['mensagem-erro']);

	}else{
		$_SESSION['mensagem-erro'] = "Verifique os dados e tente novamente!";		
	}

	





?>




</body>
</html>
