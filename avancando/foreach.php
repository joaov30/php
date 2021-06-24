<?php


$contasCorrentes = [
    12345678910 => [
        'titular' => 'Victor',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Mariza',
        'saldo' => 10000
    ],
    12345678912 => [
        'titular' => 'Alan',
        'saldo' => 300
    ]
    ];

foreach($contasCorrentes as $cpf => $conta) {
    echo "$cpf: ";
    echo $conta ['titular'] . PHP_EOL;
}