<?php
date_default_timezone_set("America/Sao_Paulo"); 
$data = date("d/m/Y"); 
$hora = date("H:i:s");
$mensagem = "Hoje é " . $data . " e agora são " . $hora . ".";
$horaAtual = (int) date("H");   // 0 a 23 
if ($horaAtual < 12) { 
$saudacao = "Bom dia"; 
} elseif ( $horaAtual >= 13 ) { 
$saudacao = "Boa tarde"; 
} elseif ($horaAtual >= 18) { 
$saudacao = "Boa Noite"; 
} 

?>
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
<meta charset="UTF-8"> 
<title>Data e hora</title> 
</head> 
<body> 
<h1>Data e hora do servidor</h1> 
<p><?php echo $mensagem ?></p> 
<p> <?php echo $saudacao ?> </p>

</body> 
</html>