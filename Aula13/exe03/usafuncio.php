<?php
    require_once 'Funcionario.class.php'; 

    
    $funcionario1 = new Funcionario("Mc Tominay", 3000);
    $funcionario2 = new Funcionario("Diego Armando Maradona", 7000);
    $funcionario3 = new Funcionario("Kvicha Kvaratskhelia", 9600000);
    
    $funcionario1->aumentarSalario(5000 * 0.1);
    $funcionario2->aumentarSalario(3000 * 0.1);
    $funcionario3->aumentarSalario(80000 * 0.1);

    echo $funcionario1->exibirInformacoes() . "<br>";
    echo $salario = $funcionario1->getSalario() . "<br>";

    echo $funcionario2->exibirInformacoes() . "<br>";
    echo $salario = $funcionario2->getSalario() . "<br>";

    echo $funcionario3->exibirInformacoes() . "<br>";
    echo $salario = $funcionario3->getSalario() . "<br>";
?>