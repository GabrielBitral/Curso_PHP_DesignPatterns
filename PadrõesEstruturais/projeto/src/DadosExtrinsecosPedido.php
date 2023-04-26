<?php

namespace Alura\DesignPattern;

use DateTimeImmutable;

class DadosExtrinsecosPedido
{
    private string $nomeCliente;
    private \DateTimeInterface $dataFinalizacao;

    public function __construct(string $nomeCliente, DateTimeImmutable $dataFinalizacao)
    {
        $this->nomeCliente = $nomeCliente;
        $this->dataFinalizacao = $dataFinalizacao;
    }

    public function recuperarNomeCliente()
    {
        return $this->nomeCliente;
    }

    public function recuperarDataFinalizacao()
    {
        return $this->dataFinalizacao;
    }
}