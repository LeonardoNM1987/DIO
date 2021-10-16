<?php session_start();

require_once "servicos/servicoValidacao.php";
require_once "servicos/servicoMsgSessao.php";
//$validaNome = $validaIdade = true;

$nome = $_POST['nome'];
$idade = $_POST['idade'];


validaNome($nome);
validaIdade($idade);

if((validaNome($nome)) && (validaIdade($idade))){	
	limpaMsgErro();
	setMensagemSucesso("Dados cadastrados com sucesso!");
	setResultado("Nome: $nome (".gettype($nome).")<br>
				 Idade: $idade (".gettype($idade).")<br>".
	             verificaCategoria($idade));	
	header('Location:competicao.php');
}



