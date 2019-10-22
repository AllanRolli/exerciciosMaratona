<?php
$name = [];//inicializa a variavel
$solved = [];//inicializa a variavel
$last =[];//inicializa a variavel
$names=file('1.txt');
$tam = $names[0];

for ( $i = 0; $i < $tam; $i++ ) { //condição para as interações
    sscanf( $names[$i],"%s %s", $name[], $solved[] ); //quebra linha de aluno e nota em duas variaveis      
}

do // faça até quando variavel changed for true
{
    $changed = false;//inicializa a variavel
    for( $i = 0, $c = count( $solved ) - 1; $i < $c; $i++ ) {//condição para as interações
        if( $solved[$i] > $solved[$i + 1] ) {//condição para verificar qual a maior nota
            list( $solved[$i + 1], $solved[$i], $name[$i + 1], $name[$i] ) =
                array( $solved[$i], $solved[$i + 1], $name[$i], $name[$i + 1] );// troca as notas de acordo com o nome caso
            $changed = true;
            
        }
        if( $solved[$i] == $solved[$i + 1] ) {//condição para verificar se as notas são iguais
            $last[0] = $name[$i];//inicializa a variavel na posição 0
            $last[1] = $name[$i + 1];//inicializa a variavel na posição 1
            rsort($last);//reordena inversamente
            $name[$i] = $last[0];//reordena o nome de acordo com a ordem certa
            $name[$i + 1] = $last[1];//reordena o nome de acordo com a ordem certa
        }
    }
}while( $changed );//enquanto variavel for true, fica no laço

$last = $name[1];

echo $last;//printa na tela o aluno reprovado
