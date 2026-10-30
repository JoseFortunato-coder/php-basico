<?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    

    $altura = $_POST['alturaNome'];
     $altura = str_replace(",", ".", $altura);
  $altura = (float) $altura;
    $textoSeguroAltura = htmlspecialchars($altura);
    
     $peso = $_POST['pesoNome'];
     $peso = str_replace(",", ".", $peso);
     $peso = (float) $peso;
    $textoSeguroPeso = htmlspecialchars($peso);
      
  if ($peso !== "" && $peso !== 0 && $altura !== "" && $altura != 0 && is_numeric($altura) && is_numeric($peso)){ 
 if ($altura == 0){
 
     $peso = "";
  $altura = "";
}else{ $imc = $peso / ($altura * $altura);
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
}elseif ($altura !== is_numeric($altura) || $peso !== is_numeric($peso)){
  echo "<script> alert('Por favor coloque só números. '); </script>";
  $peso = "";
  $altura = "";
}
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
        <label for="peso_input">Peso: </label>
        <input type="text" id="peso_input" name="pesoNome" required>
        <button type="submit">Enviar</button>
        <br>
    
  
        <label for="altura_input">Altura: </label>
        <input type="text" id="altura_input" name="alturaNome" required>
        <button type="submit">Enviar</button>
    </form>
  <p>IMC: <strong><?= $imcFormatado ?? '' ?></strong></p>
  <p>Classificação: <strong><?= $classe ?? '' ?></strong></p> 
</body> 
</html>