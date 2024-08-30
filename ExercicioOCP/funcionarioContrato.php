<?php

    class FuncionarioContrato implements CalculadoraSalarios{

        public function calcularSalario (Funcionario $funcionario){
            // Contrato não tem bonus
            return $funcionario->salario;
        }
    }
?>