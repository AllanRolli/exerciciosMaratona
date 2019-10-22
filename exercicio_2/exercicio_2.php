<?php
$names=file('2.txt');
function busca($arrayName, $v) { //busca a chave(numero) no arrayName
  foreach ($arrayName as $key => $value) {
      if(strpos($value, $v) !== false){
              return $key;
      }
  }
}

$arrayName = [ //array com chave e valor
  "2" => "ABC",
  "3" => "DEF",
  "4" => "GHI",
  "5" => "JKL",
  "6" => "MNO",
  "7" => "PQRS",
  "8" => "TUV",
  "9" => "WXYZ"];  

$tam = count($names); //conta o tamanho da entrada
for($j=0;$j < $tam;$j++) { //condição para as interações
  $newtext1 = $names[$j]; //pego o primeiro valor da entrada    
  $length = strlen($newtext1); //pega o tamanho da linha
  $numero = ""; //inicializa a variavel
  $i = 0;//inicializa a variavel

  while( $i < $length ){ //enquando o i for menor que o tamanho da string ele continua
    
    $letra = $newtext1[$i];  //passo o valor letra por letra    

    if ( $letra == "0" or $letra == "1" or $letra == "-" ){ //se a letra for igual a uma dessas condições, a letra permanece
      $numero .= $letra; //concatena os numeros
      $i++;
    }else { //caso contrario ele faz a busca e retorna o numero da letra.
        $numero .= busca($arrayName, $letra);//concatena os numeros
        $i++;
        }
      }
  echo $numero."\n"; //exibe o numero
}