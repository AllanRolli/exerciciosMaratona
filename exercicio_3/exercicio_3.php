<?php

$names=file('3.txt'); //onde está as entradas
$newtext1 = $names[0]; //pego a quantidade de aluno
$i = 0;  //inicializo a variavel
$maior = -1;//inicializo a variavel
for ($i=0; $i < $newtext1;$i++ ) { //condição para as iterações. enquanto i for menor a quantidade de aluno.

  $soma[$i] = 0; //inicializa a soma das colunas
  $starter = 0;
  foreach($names as $linha) {
     if($starter == 1) {//pega a segunda linha	      
		$newtext = $linha[$i*2]; // para pular os espaços em branco o i começa em 2 e vai somando 2		
		$soma[$i] += $newtext;
	 }
	 else// para pular a primeira linha
		$starter = 1;		
	}
   if($maior < $soma[$i]) //verifica qual é o maior valor das somas das colunas.
		 $maior = $soma[$i];	 
}
echo $maior; // imprimi o maior valor