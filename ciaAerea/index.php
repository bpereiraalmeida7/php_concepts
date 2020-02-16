<?php
include "classes/Checkout.php";
include "classes/Flight.php";

$ida = new Flight('001', 'Azul', 'Belo Horizonte', 'Bahia', new DateTime(), new DateTime(), 300.0, 30.0, 'Cachorro', 400.0);
$volta = new Flight('002', 'Azul', 'Bahia', 'Belo Horizonte', new DateTime(), new DateTime(), 220.0, 20.0, 'Gato', 3000.0);
$checkin = new Checkout($ida, $volta);

$item = ($checkin->generateExtract());
echo '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>
        Questão 4 - Flight
        </title>
    </head>
        <body>
            <table>
                <tr>
                    <th>Voo de Ida</th>
                    <th>Voo de Volta</th>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Voo:'.$item->flightOutbound['Voo'].' </li>
                            <li>Companhia:'.$item->flightOutbound['Companhia'].' </li>
                            <li>De: '.$item->flightOutbound['De'].'</li>
                            <li>Para: '.$item->flightOutbound['Para'].'</li>
                            <li>Embarque: '.$item->flightOutbound['Embarque'].'</li>
                            <li>Desembarque: '.$item->flightOutbound['Desembarque'].'</li>
                            <li>Carga Viva: '.$item->flightOutbound['Carga Viva'].'</li>
                            <li>Preço da Bagagem: '.$item->flightOutbound['Preço da Bagagem'].'</li>
                            <li>Preço da Carga:'.$item->flightOutbound['Preço da Carga'].' </li>
                            <li>Valor: '.$item->flightOutbound['Valor'].'</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Voo:'.$item->flightInbound['Voo'].' </li>
                            <li>Companhia:'.$item->flightInbound['Companhia'].' </li>
                            <li>De: '.$item->flightInbound['De'].'</li>
                            <li>Para: '.$item->flightInbound['Para'].'</li>
                            <li>Embarque: '.$item->flightInbound['Embarque'].'</li>
                            <li>Desembarque: '.$item->flightInbound['Desembarque'].'</li>
                            <li>Carga Viva: '.$item->flightInbound['Carga Viva'].'</li>
                            <li>Preço da Bagagem: '.$item->flightInbound['Preço da Bagagem'].'</li>
                            <li>Preço da Carga:'.$item->flightInbound['Preço da Carga'].' </li>
                            <li>Valor: '.$item->flightInbound['Valor'].'</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td> <b>Valor Total:</b> '.$item->valorTotal.'</td>
                </tr>
            </table>
        </body>
    </html>';

?>
