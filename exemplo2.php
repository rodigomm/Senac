<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Primeiro Exemplo PHP</title>

</head>
<body>
<div>
	<h1>Testando PHP</h1>
	<?php

		$n1 = $_GET["a"]; 
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos: $n1 e $n2</h2>";
        $m = ($n1 + $n2) / 2; 
        echo "valor variavel n1 = $n1";
        echo "<br/>valor variavel n2 = $n2";
        echo "<br/><br/>A soma vale ". ($n1 + $n2);
        echo "<br/>A subtracao vale ". ($n1-$n2);
        echo "<br/>A multiplicacao vale ". ($n1*$n2);
        echo "<br/>A divisao vale ". ($n1/$n2);
        echo "<br/>O modulo vale ". ($n1%$n2);
        echo "<br/>A media vale $m";

    ?>

</div>
</body>
</html>