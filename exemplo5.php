<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Mostrar se um eleitor é obrigado a votar ou não</title>
	<style>
		h2 {
			color: #80a2ff;
			text-shadow: 1px 1px 1px black;
		}
	</style>
</head>
<body>
	<h1>Testando PHP</h1>
	

	<form action="" method="get">
  	Sua idade:  <input type="number" name="age" /><br />
  	<input type="submit" name="submit" value="Testar" />
	</form> 
 


    <?php

        $ano = $_GET["age"];
        $idade = 2022 - $ano;
        echo "</br>Quem nasceu em $ano tem idade de $idade anos.</br>";
        $tipo = ($idade>=18 && $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
		echo "</br>E dessa forma seu voto é $tipo";
        
	?>
</body>
