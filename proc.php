<?php
/*
pegar os dados que vem do formulario via METHOD='GET'
*/
// metodos globais ou variaveis globais
//$nome = $_GET['nome'];
//$CPF = $_GET['cpf'];
//$RG = $_GET['rg'];

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];

// mostrar
 echo "Seu nome é: " . $nome;
 echo " <br>Seu CPF é: " .  $cpf;
 echo " <br>Seu RG é: " .  $rg;
 echo "<br> Seu EMAIL é: " . $_POST['ema'];
?>