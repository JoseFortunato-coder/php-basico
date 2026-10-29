<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    

    $altura = $_POST['alturaNome'];
    $textoSeguroAltura = htmlspecialchars($altura);
    
     $peso = $_POST['pesoNome'];
    $textoSeguroPeso = htmlspecialchars($peso);
      
   if ($peso !== "" && $altura !== ""){ 
    $calculo = "$peso / ($altura * $altura)" ;
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
}
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
  <form method="POST" action="">
        <label for="peso_input">Peso: : </label>
        <input type="text" id="peso_input" name="pesoNome" required>
        <button type="submit">Enviar</button>
    </form>
   <form method="POST" action="">
        <label for="altura_input">Altura: </label>
        <input type="text" id="altura_input" name="alturaNome" required>
        <button type="submit">Enviar</button>
    </form>
  <p> Calculo: <?= $calculo ?? '' ?></strong>
  <p>IMC: <strong><?= $imcFormatado ?? '' ?></strong></p>
  <p>Classificação: <strong><?= $classe ?? '' ?></strong></p> 
</body> 
</html>