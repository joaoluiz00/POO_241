<?php
require_once 'NotaFiscal.php';
require_once 'CorreiosReal.php';
require_once 'LeiDeEntregaReal.php';
require_once 'DespachadorDeNotasFiscais.php';
require_once 'CalculadorDeImposto.php';
require_once 'NFDao.php';

// Criando as instâncias necessárias
$correios = new CorreiosReal();
$lei = new LeiDeEntregaReal();
$entregador = new EntregadorDeNFs($correios, $lei);
$calculadorDeImposto = new CalculadorDeImposto();
$dao = new NFDao();
$despachador = new DespachadorDeNotasFiscais($dao, $calculadorDeImposto, $entregador);

// Criando uma nota fiscal e processando
$notaFiscal = new NotaFiscal(1500); // Valor da nota fiscal
$despachador->processa($notaFiscal);
