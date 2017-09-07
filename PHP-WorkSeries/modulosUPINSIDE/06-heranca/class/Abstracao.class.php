<?php

abstract class Abstracao {

    public $Cliente;
    public $Conta;
    public $Saldo;

    function __construct($Cliente, $Saldo) {
        $this->Cliente = $Cliente;
        $this->Saldo = $Saldo;
    }

    public function Despositar($Valor) {
        $this->Saldo += (float) $Valor;
        echo "<span style='color:green'><b>{$this->Conta}:</b> Depósito de {$this->Real($Valor)} efetuado com suecsso!</span><br>";
    }

    public function Sacar($Valor) {
        $this->Saldo -= (float) $Valor;
        echo "<span style='color:red'><b>{$this->Conta}:</b> Saque de {$this->Real($Valor)} efetuado com suecsso!</span><br>";
    }

    /** @param Abstracao $Destino */
    public function Tranferir($Valor, $Destino) {
        if ($this === $Destino):
            echo "Você não pode tranferir valores para mesma conta!<br>";
        else:
            echo "<hr>";
            $this->Sacar($Valor);
            $Destino->Despositar($Valor);
            echo "<span style='color:blue'><b>{$this->Conta}:</b> Tranferência de {$this->Real($Valor)} efetuada com suecsso de {$this->Cliente} para {$Destino->Cliente}!</span><br>";
            echo "<hr>";
        endif;
    }

    public function Extrato() {
        echo "<hr><hr>Olá {$this->Cliente}. Seu saldo em {$this->Conta} é de {$this->Real($this->Saldo)}<hr>";
    }

    public function Real($Valor) {
        return "R$ " . number_format($Valor, '2', '.', ',');
    }

    abstract public function VerSaldo();

}
