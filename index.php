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

$resultado = somarNumero(10, 20);

$resposta = mostrarNome();

echo "Resultado vai ser: ".$resultado;

echo "Meu nome é: ".$resposta;

?>