<?php

/**
 * Description of aluno
 *
 * @author Alves
 * @copyright (c) 2017, Marcello Alves
 */
class aluno {
   
    /** @var string Esta variável guarda o nome do aluno.*/
    var $aluno;
    var $idade;
    var $curso;
    var $cpf;
    
    //Constrói o objeto aluno, requisitando nome, idade, curso e cpf.
    function __construct($aluno, $idade, $curso, $cpf) {
        $this->aluno = $aluno;
        $this->idade = $idade;
        $this->curso = $curso;
        $this->cpf = $cpf;
    }
    
    function getAluno() {
        return $this->aluno;
    }

    function getIdade() {
        return $this->idade;
    }

    function getCurso() {
        return $this->curso;
    }

    function getCpf() {
        return $this->cpf;
    }

    function setAluno($aluno) {
        $this->aluno = $aluno;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }



}
