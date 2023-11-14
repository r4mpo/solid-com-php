<?php

namespace Alura\Solid\Model;

class Feedback
{
    private int $nota;
    private string $depoimento;

    // Construtor que valida a informação
    public function __construct($nota, $depoimento) {
        if ($nota < 9 && empty($depoimento)) {
            throw new \DomainException('Depoimento obrigatório');
        } else {
            $this->nota = $nota;
            $this->depoimento = $depoimento;
        }
    }
}