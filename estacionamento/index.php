<?php

    include "model/Estacionamento.php";

    $vaga = new Estacionamento('001', 'Carro', '100.0', new DateTime());

    $item = ($vaga->getInfoVagas());
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>
        Questão 2 - Estacionamento
        </title>
    </head>
        <body>
        '.$item.'
        </body>
    </html>';