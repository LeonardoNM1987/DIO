<?php
session_start();



if(empty($_POST['nome'])){
	$_SESSION['erro'] = "O nome nao pode ser vazio!<br>";
	
}else if(empty($_POST['idade'])){
	$_SESSION['erro'] = "A idade nao pode ser vazia!<br>";	
	
	
} else{
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];	
	echo "Nome: $nome (".gettype($nome).")<br>";
	echo "Idade: $idade (".gettype($idade).")<br>";
}

echo "<br><br><button onclick='history.go(-1);'>Voltar</button>";
echo "<hr>";
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

//$mensagemErro = isset($_SESSION['mensagem-erro']) ? $_SESSION['mensagem-erro'] : "";






/*

if((!empty($_POST['nome'])) && (!empty($_POST['idade']))){
		
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	
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
*/

