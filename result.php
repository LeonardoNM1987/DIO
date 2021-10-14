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
	


<?php

$validaNome = $validaIdade = true;

$nome = $_POST['nome'];
$idade = (int)$_POST['idade'];

echo "<div class='resultado'>";

if(empty($nome)){
	$_SESSION['erro'] = "O nome nao pode ser vazio!<br>";	
	$validaNome = false;	
	header('Location:competicao.php');
	return;
}else if((strlen($nome) < 2) || (strlen($nome) > 50)){
	$_SESSION['erro'] = "O nome deve conter de 2 à 50 letras!<br>";	
	$validaNome = false;
	header('Location:competicao.php');
	return;
} else if(empty($idade)){
	$_SESSION['erro'] = "A idade nao pode ser vazia!<br>";	
	$validaIdade = false;
	header('Location:competicao.php');
	return;
}else if($idade < 0 || $idade > 150){
	$_SESSION['erro'] = "A idade deve ser entre 0 e 150 anos!<br>";		
	$validaIdade = false;
	header('Location:competicao.php');
	return;
} else if(!is_numeric($idade)){
	$_SESSION['erro'] = "A idade deve ser um numero inteiro!<br>";	
	$validaIdade = false;
	header('Location:competicao.php');
	return;
}



if($validaNome && $validaIdade){
		
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
	unset($_SESSION['erro']);
}


echo "<br><br><button onclick='history.go(-1);'>Voltar</button>";
echo "</div>";
/*
echo "<pre>";
var_dump($_SESSION);
var_dump($_POST['nome']);
var_dump($_POST['idade']);
echo "</pre>";
*/

?>
</body>
</html>
