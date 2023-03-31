<?php
/*2) Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...), escreva um programa na linguagem que desejar onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando se o número informado pertence ou não a sequência.

IMPORTANTE:
Esse número pode ser informado através de qualquer entrada de sua preferência ou pode ser previamente definido no código;*/

$num1 = 5;
$num2 = 6;
echo $num1 . "\n";
echo $num2 . "\n";

for($i = 0; $i < 10; $i++){
    $fibo = $num1 + $num2; //Soma os dois valores iniciais
    echo $fibo . "\n";     //Exibe o valor da soma (11)
    $num1 = $num2;         //Atribui o valor de $num2 (6) para $num1
    $num2 = $fibo;         //Atribui o valor de $fibo (11) para $num2
}
