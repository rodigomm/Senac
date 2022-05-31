<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Exemplo PHP recebendo valor e calculando porcentagem</title>
	<style>
		h2 {
			color: #80a2ff;
			text-shadow: 1px 1px 1px black;
		}
	</style>
</head>
<body>
	<h1>Testando PHP</h1>
	
    <?php

        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1+$nota2)/2;
        echo "A media entre $nota1 e $nota2 e $m </br>";
        echo "A situacao do aluno e ". (($m<6)?"REPROVADO":"APROVADO");
        
	?>
</body>
