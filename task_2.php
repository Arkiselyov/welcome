<?php

$pervo = 100000;
$deposit = $pervo;
$percent = 8;
$i = 0;

do {
    $i++;
    $deposit += ($deposit * $percent / 100);
    if ($i % 3 == 0) {
        $percent += 2;
    }
} while ($deposit <= 200000);

echo "Через {$i} лет сумма на депозите удвоится";