<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Competição de Natação</title>
</head>
<body>
	
	<form action="exerc01.php" method="post">

		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" required><br>
		<label for="idade">Idade:</label>
		<input type="number" name="idade" id="idade" min=0 max=120 required><br>
		<input type="submit" value="Enviar">

	</form>
	<hr>
	<?php

	if(isset($_POST['nome'])){

		echo "Nome: ".$_POST['nome'];
		echo "<br>Idade: ".$_POST['idade']."<br>";
		
		
		$idade = $_POST['idade'];

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
				echo "Categoria: adulto!";
				break;
			default:
				echo "Não foi possível definiar a categoria!";
				break;


		} 

	}else
		echo "Nenhuma informação recebida.";


phpinfo();

	?>




</body>
</html>