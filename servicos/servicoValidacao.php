<?php
 if(!isset($_SESSION)){session_start();} 

function validaNome($n) : bool{ #especifica que o retorno é booleano

	if(empty($n)){
		setMensagemErro("O nome nao pode ser vazio!");
		limpaResultado();			
		header('Location:competicao.php');
		return false;
	}else if((strlen($n) < 2) || (strlen($n) > 50)){
		setMensagemErro("O nome deve conter de 2 à 50 letras!");
		limpaResultado();		
		header('Location:competicao.php');
		return false;
	} 	
	
	return true;
}


function validaIdade($id) : bool{#especifica que o retorno é booleano
	
	if(empty($id)){
		setMensagemErro("A idade nao pode ser vazia!");
		limpaResultado();		
		header('Location:competicao.php');		
		return false;
	}else if(!is_numeric($id)){
		setMensagemErro("A idade deve ser um numero inteiro!");	
		limpaResultado();
		header('Location:competicao.php');
		return false;		
	} else if($id < 0 || $id > 150){
		setMensagemErro("A idade deve ser entre 0 e 150 anos!");
		limpaResultado();			
		header('Location:competicao.php');
		return false;		
	}	
	
	return true;
}



function verificaCategoria(int $idade):string{
	switch($idade){
		case ($idade < 6):
			$categoria = "Menores de 6 anos não podem competir!";
			break;
		case ($idade >= 6 && $idade <=12):
			$categoria = "Categoria: Infantil!";
			break;
		case ($idade >= 13 && $idade <=18 ):
			$categoria = "Categoria: Adolescente!";
			break;
		case ($idade > 18):
			$categoria = "Categoria: Adulto!";
			break;
		default:
		$categoria = "Não foi possível definir a categoria!";
			break;
	}	
	return $categoria;
}



function limpaSessoes(){
	unset($_SESSION['msgSucesso']);
	unset($_SESSION['msgErro']);
	unset($_SESSION['resultado']);
}


