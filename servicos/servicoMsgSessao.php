<?php
 if(!isset($_SESSION)){session_start();} 

function setMensagemSucesso(string $msg):void{
	$_SESSION['msgSucesso'] = $msg;
}

function getMensagemSucesso():?string{
	if(isset($_SESSION['msgSucesso'])){
		return $_SESSION['msgSucesso'];
	}else
		return null;
}
function limpaMsgSucesso():void{
	if(isset($_SESSION['msgSucesso'])){
		unset($_SESSION['msgSucesso']);
	}
}

################################################

function setMensagemErro(string $msg) : void{  #funcao void não retorna nada
	$_SESSION['msgErro'] = $msg;	 
}

function getMensagemErro() : ?string{  # o '?' na frente do tipo libera o retorno de 'null' na função 
	
	if(isset($_SESSION['msgErro'])){
		return $_SESSION['msgErro'];
	}else
		return null;	
}

function limpaMsgErro():void{
	if(isset($_SESSION['msgErro'])){
		unset($_SESSION['msgErro']);
	}
}

##############################################

function setResultado(string $result):void{
	$_SESSION['resultado'] = $result;
}
function getResultado():?string{
	if(isset($_SESSION['resultado'])){
		return $_SESSION['resultado'];
	}else
		return null;
}
function limpaResultado(){
	if(isset($_SESSION['resultado'])){
		unset($_SESSION['resultado']);
	}
}