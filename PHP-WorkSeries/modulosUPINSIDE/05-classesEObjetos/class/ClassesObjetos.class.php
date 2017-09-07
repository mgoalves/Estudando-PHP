<?php

class ClassesObjetos {

    var $Classe;
    var $Funcao;

    function getClasse() {
        return $this->Classe;
    }

    function getFuncao() {
        return $this->Funcao;
    }

    function setClasse($Classe) {
        $this->Classe = $Classe;
    }

    function setFuncao($Funcao) {
        $this->Funcao = $Funcao;
    }

    function __construct($Classe, $Funcao) {
        $this->Classe = $Classe;
        $this->Funcao = $Funcao;
    }

    function getClass($Class, $Funcao) {
        echo "<p> A classe {$Class} serve para {$Funcao}";
    }

    function verClass() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }

}
