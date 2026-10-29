<?php 
$peso   = 70.0;   
$altura = 1.75; 
$imc = $peso / ($altura * $altura);
$imcFormatado = number_format($imc, 1, ",", ".");   
if ($imc < 18.5) { 
$classe = "Abaixo do peso"; 
} elseif ($imc < 25) { 
$classe = "Peso normal"; 
} elseif ($imc >= 25 && $imc < 30) { 
$classe = "Sobrepeso"; 
} elseif ($imc >= 30 && $imc < 35) { 
$classe = "Obesidade grau I"; 
} elseif ($imc >= 35 && $imc < 40) { 
$classe = "Obesidade grau II"; 
}elseif ($imc >= 40 ){
$classe = " Obesidade grau III (mórbida)"; 
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
}
?>
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="UTF-8"> 
  <title>Calculadora de IMC</title> 
</head> 
<body> 
  <h1>Calculadora de IMC</h1> 
  <p>Peso: <?= $peso ?> kg</p> 
   <form method="POST" action="">
        <label for="Atura_input">Altura: </label>
        <input type="text" id="Atura_input" name="Altura: " required>
        <button type="submit">Enviar</button>
    </form>
  <p>IMC: <strong><?= $imcFormatado ?></strong></p> 
  <p>Classificação: <strong><?= $classe ?></strong></p> 
</body> 
</html>