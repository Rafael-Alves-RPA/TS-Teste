<?php
/*3) Dado um vetor que guarda o valor de faturamento diário de uma distribuidora, faça um programa, na linguagem que desejar, que calcule e retorne:
• O menor valor de faturamento ocorrido em um dia do mês;
• O maior valor de faturamento ocorrido em um dia do mês;
• Número de dias no mês em que o valor de faturamento diário foi superior à média mensal.

IMPORTANTE:
a) Usar o json ou xml disponível como fonte dos dados do faturamento mensal;
b) Podem existir dias sem faturamento, como nos finais de semana e feriados. Estes dias devem ser ignorados no cálculo da média;*/

$json = file_get_contents("dados.json");
$data = json_decode($json);

$days = [];
$values = [];
    
foreach ($data as $billing) {
    $values[] = $billing->valor;
    $days[] = $billing->dia;
}

$valDif0 = [];

for($i=0 ; $i < count($values);$i++){
    if ($values[$i] != 0){
        $valDif0[$i] = $values[$i];
    }
}

$billingTotal = array_sum($valDif0);
$averageBilling = $billingTotal / count($valDif0);
echo "O valor médio por dia é " . round($averageBilling, 2) . "\n";

$moreThanAverages = [];

for ($i=0  ; $i < count($valDif0); $i++){
    if (isset($valDif0[$i]) && $valDif0[$i] > $averageBilling){
        $moreThanAverages[$i] = $valDif0[$i];  
    }
}

echo "---------------|---------------" . "\n";

foreach ($moreThanAverages as $key => $moreThanAverage ){
    foreach ($days as $day => $dayV){
        if ($day == $key){
            echo "No dia " .  $dayV . " o faturamento foi " . round($moreThanAverage, 2) . ", maior que a média de " . round($averageBilling, 2) . "\n";
        }
    }
}

echo "---------------|---------------" . "\n";
$higherValue = max($valDif0);
echo "O maior valor é " . round($higherValue, 2) . "\n";

echo "---------------|---------------" . "\n";
$lowerValue = min($valDif0);
echo "O menor valor é " . round($lowerValue, 2) . "\n";
