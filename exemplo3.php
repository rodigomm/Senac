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

        $preco = $_GET["p"];
        echo "o preco do produto e R$ " . number_format($preco, 2);
        $preco -= ($preco*10/100);
        echo "<br/>E o novo valor com os 10% sera R$ " . number_format($preco, 2);

	?>
</body>
