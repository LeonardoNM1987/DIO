<?php session_start(); //iniciar sempre que for manipular sessões 
require_once "servicos/servicoMsgSessao.php";
require_once "servicos/servicoValidacao.php";
?>



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
			<div class="campo-mensagem">
			<?php
				if(getMensagemErro()!=null){
					echo "<div class='mensagem-erro'>";
					echo getMensagemErro();
					echo "</div>";
				}
				if(getMensagemErro()==null){
					echo "<div class='mensagem-sucesso'>";
					echo getMensagemSucesso();
					echo "</div>";
				}
			?>			
			
			</div>
			
			<input type="submit" value="Enviar" id="subm">
			
		</fieldset>
	</form>
	
	<?php
	
	 if(getResultado()!=null){
		echo "<fieldset class='fieldResult'><legend>Resultado</legend>";
		echo getResultado();
		echo "</fieldset>";	
		
	}	
	?>


	<!--
	<div class="debug">		
			<?php					
				var_dump(getMensagemErro());
				echo "<br><br>";
				var_dump(getMensagemSucesso());
			?>		
	</div>
	-->
<hr>

<button id="botaoLimpar"><a href="limpaSessoes.php" title="Limpa variáveis de sessão e reseta tudo">Limpar Sessões</a></button>






</body>
</html>
