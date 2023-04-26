<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido};
use Alura\DesignPattern\Relatorio\{OrcamentoExportado, PedidoExportado};
use Alura\DesignPattern\Relatorio\{ArquivoXmlExportado, ArquivoZipExportado};

/* $orcamento = new Orcamento(); */
$pedido = new Pedido();
$pedido->nomeCliente = "Vinicius Dias";
$pedido->dataFinalizacao = new DateTimeImmutable();
/* $orcamento->valor = 500;
$orcamento->quantidadeItens = 7; */
/*
$orcamentoExportado = new OrcamentoExportado($orcamento);
 $orcamentoExportadoXml = new ArquivoXmlExportado('orcamento');
$orcamentoExportadoZip = new ArquivoZipExportado('orcamento.array'); */

$pedidoExportado = new PedidoExportado($pedido);
$orcamentoExportadoZip = new ArquivoZipExportado('pedido.array');

/* echo $orcamentoExportadoXml->salvar($orcamentoExportado); 
echo $orcamentoExportadoZip->salvar($orcamentoExportado);*/
echo $orcamentoExportadoZip->salvar($pedidoExportado);