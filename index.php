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

$dataProxima = date('d/m/Y', strtotime("+10 days"));

echo "Resultado vai ser: ".$resultado;

echo "</br>";

echo "Meu nome é: ".$resposta;

echo "</br>";

echo "Data atual:".$dataAtual;

echo "</br>";

echo $x;

echo "</br>";

echo $dataProxima;

echo "</br>";

//FUNÇÕES MATEMÁTICAS

//Absoluto:
echo abs(10);
echo "</br>";
echo abs(-10);
echo "</br>";

//Arredondar
echo round(2.8);
echo "</br>";
echo round(2.4);
echo "</br>";

echo "Arredondar pra cima";
echo "</br>";
echo ceil(2.8);
echo "</br>";
echo ceil(2.4);
echo "</br>";

echo "Arredondar pra baixo";
echo "</br>";
echo floor(2.99999);
echo "</br>";
echo floor(2.4);
echo "</br>";

echo "Gerar inteiro aleatorio";
echo "</br>";
echo rand(3,9);
echo "</br>";
echo rand(3,1000);
echo "</br>";
$lista = array("Fulano", "André", "Maria", "Lucas");
$x = rand(0,3);
echo "Sorteado: ".$lista[$x];

//Manipulação de texto






















?>