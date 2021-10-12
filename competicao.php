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
	
	<form action="competicao.php" method="post">

		<fieldset>
			<legend>Competidores</legend>
			<li><label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" maxlength="50" minlength="2" required><br></li>
			<li><label for="idade">Idade:</label>
			<input type="number" name="idade" id="idade" min=0 max=120 required><br></li>
			<input type="submit" value="Enviar" id="subm" for='enviar'>
		</fieldset>
	</form>
	<hr>
	<?php

	
	
	

if((isset($_POST['nome'])) && (isset($_POST['idade']))){
	
	$nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
	$idade = filter_var($_POST['idade'], FILTER_SANITIZE_NUMBER_INT);
	
	echo "Nome: $nome <br>";
	echo "Idade: $idade <br>";
	
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
			echo "Não foi possível definiar a categoria!";
			break;
	}	

}else{
	echo "Preencha todos os campos!";
}


	
		
		
		
		

		




	?>




</body>
</html>