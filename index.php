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
echo "</br>";

//Manipulação de texto

//Explode 
$nome1 = "Deusyvan Silva";
$x = explode(" ", $nome1);
print_r($x);
$nome2 = "Deusyvan Ferreira da Silva";
echo "</br>";
$y = explode("da", $nome2);
print_r($y);
echo "</br>";

//Implode
$array = array("Deusyvan", "Ferreira", "da", "Silva");
$nomecompleto = implode(" ", $array);
echo $nomecompleto;
echo "</br>";

//Number Format
$z = number_format(8.5455588822,2);
echo $z;
echo "</br>";
echo number_format(3458798.124587,2);
echo "</br>";
echo number_format(3458798.124587,2,",",".");
echo "</br>";
echo number_format(3458798.124587,2,",","");
echo "</br>";

//String replace
$texto = "O rato roeu a roupa!";
$string = str_replace("roeu", "comeu",$texto);
echo $string;
echo "</br>";

//Maiúsculas em minúsculas
echo strtolower("DEUSYVAN FERREIRA DA SILVA");
echo "</br>";

//minúsculas em Maiúsculas 
echo strtoupper("maria eduarda bomfim");
echo "</br>";

//Substring
echo substr("Deusyvan Ferreira da Silva", 0, 3);
echo "</br>";
echo substr("Deusyvan Ferreira da Silva", 1, 3);
echo "</br>";
echo substr("Deusyvan Ferreira da Silva", 2, 3);
echo "</br>";

//ucfirst Primeira maiúscula
echo ucfirst("deusyvan ferreira silva");
echo "</br>";
echo ucwords("deusyvan ferreira da silva");








?>