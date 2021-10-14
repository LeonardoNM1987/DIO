<?php
session_start();


$validaNome = $validaIdade = true;

$nome = $_POST['nome'];
$idade = (int)$_POST['idade'];



if(empty($nome)){
	$_SESSION['erro'] = "O nome nao pode ser vazio!<br>";
	echo $_SESSION['erro'];	
	$validaNome = false;	
}else if((strlen($nome) < 2) || (strlen($nome) > 50)){
	$_SESSION['erro'] = "O nome deve conter de 2 à 50 letras!<br>";	
	echo $_SESSION['erro'];
	$validaNome = false;
}
if(empty($idade)){
	$_SESSION['erro'] = "A idade nao pode ser vazia!<br>";	
	echo $_SESSION['erro'];
	$validaIdade = false;	
}else if($idade < 0 || $idade > 150){
	$_SESSION['erro'] = "A idade deve ser entre 0 e 150 anos!<br>";	
	echo $_SESSION['erro'];
	$validaIdade = false;	
}
if(!is_numeric($idade)){
	$_SESSION['erro'] = "A idade deve ser um numero inteiro!<br>";	
	echo $_SESSION['erro'];
	$validaIdade = false;	
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

}


echo "<br><br><button onclick='history.go(-1);'>Voltar</button>";
echo "<hr>";
echo "<pre>";
var_dump($_SESSION);
var_dump($_POST['nome']);
var_dump($_POST['idade']);
echo "</pre>";




