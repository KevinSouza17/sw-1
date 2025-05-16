<?php
    include_once 'Conta.class.php';

    $conta1 = new Conta();

    $conta1->Nome = "Kivncha Kvaratskhelia";
    $conta1->Cpf = "123.456.789-10";
    $conta1->Saldo = 500;

    $conta1->ConsultarSaldo();
    echo "<hr>";
    echo $conta1->depositar(250);
    echo "<hr>";
    $conta1->ConsultarSaldo();




?>