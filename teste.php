
<html>

<head>

 <title>Apostila PHP Progressivo</title>
 
</head>

 <body>
 
 
 <form action="" method="get">
  Sua idade:  <input type="number" name="age" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
 
 
 <?php 
  $idade = $_GET['age'];
  
  if( $idade<16)
   echo "Não pode votar";
  elseif ($idade<18 || $idade>65)
   echo "Seu voto é facultativo";
  else
   echo "Seu voto é obrigatório";
 ?>

 </body>

 </html>