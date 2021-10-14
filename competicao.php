<?php session_start(); //iniciar sempre que for manipular sessões ?>



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
	
	<form action="result.php" method="post">
		<fieldset>
			<legend>Competidores</legend>
			
			<li><label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome"><br></li>
			
			<li><label for="idade">Idade:</label>
			<input type="text" name="idade" id="idade"><br></li>
			<div class="mensagem-erro">
				<?php
					$mensagem = isset($_SESSION['erro']) ? $_SESSION['erro'] : "";
					if(!empty($_SESSION['erro'])){
						echo $mensagem;
					}
					
				?>
			</div>
			
			<input type="submit" value="Enviar" id="subm">
			
		</fieldset>
	</form>






</body>
</html>
