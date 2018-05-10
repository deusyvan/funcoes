<?php
function somarNumero ($x, $y){
   // $conta = $x + $y;
    
   // return $conta;
    return $x + $y;
}

function mostrarNome(){
    $nome = "Deusyvan";
    
    return $nome;
}

$dataAtual = date("d - D - : d/m/Y H:i:s  -  d/m/y \à\s H:i:s");

$resultado = somarNumero(10, 20);

$resposta = mostrarNome();

$x = time();

echo "Resultado vai ser: ".$resultado;

echo "</br>";

echo "Meu nome é: ".$resposta;

echo "</br>";

echo "Data atual:".$dataAtual;

echo "</br>";

echo $x;

?>