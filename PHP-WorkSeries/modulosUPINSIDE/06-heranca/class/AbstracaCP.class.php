<?php

class AbstracaCP extends AbstracaoCC {

    public $Rendimento;

    function __construct($Cliente, $Saldo) {
        parent::__construct($Cliente, $Saldo, 0);
        $this->Conta = 'Conta Poupança';
        $this->Rendimento = 1.7;
    }

    final public function Despositar($Valor) {
        $Juro = $Valor * ($this->Rendimento / 100);
        $Deposito = $Valor + $Juro;
        parent::Despositar($Deposito);
        echo "<small style='color:#09f'>Valor do depoósito: {$this->Real($Valor)} || Rendimentos: {$this->Real($Juro)}</small><hr>";
    }

}
