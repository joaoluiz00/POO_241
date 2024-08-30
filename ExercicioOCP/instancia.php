<?php
    
    require_once "CalculadoraSalarios.php";
    require_once "funcionario.php";
    require_once "funcionarioContrato.php";
    require_once "funcionarioPermanente.php";

    $fc = new Funcionario('Jack',1000, new FuncionarioContrato());
    $fp = new Funcionario('Lanterna',1000, new FuncionarioPermanente());
    echo 'Nome:'.$fc->nome.' - Salário:'.$fc->getSalario();
    echo '<br>Nome:'.$fp->nome.' - Salário:'.$fp->getSalario();

?>