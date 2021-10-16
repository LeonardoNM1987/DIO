<?php
 if(!isset($_SESSION)){session_start();} 
 require_once "servicos/servicoValidacao.php";
limpaSessoes();
header("Location:competicao.php");


