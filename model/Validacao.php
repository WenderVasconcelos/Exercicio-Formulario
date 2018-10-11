<?php

include_once '../control/controle.php';


class validacao {
    private $f;
    function __construct($f) {
        $this->f = $f;
    }
    
    function validaCpf() {
        if (strlen($this->f->cpf) != 11) {
            return false;
        } else {
           return true;
        }
    }
    function validaNome() {
        if (($this->f->nome)=='') { 
            return false;
        } else {
           return true;
        }
    }
    function validaIdade() {
        if (($this->f->idade)== '') {
            return false;
        } else {
           return true;
        }
    }
    function validaMatricula() {
        if (($this->f->matricula)== '') {
            return false;
        } else {
           return true;
        }
    }
    function validaCidade() {
        if (($this->f->cidade)== '') {
            return false;
        } else {
           return true;
        }
    }
    function validaTudo(){
        if ($this->validaNome()){
            if ($this->validaMatricula()){
                if ($this->validaIdade()){
                    if($this->validaCpf()){
                        if($this->validaCidade()){ 
                            return $this->f;
                            }else{
                                return "Erro em Cidade";
                            }
                        }else{
                            return "Erro em CPF";
                        }
                    }else{
                        return "Erro em Idade";
                    }
                }else{
                     return "Erro em Matricula";
                }
            } else {
                return "Erro em Nome";
            }
    }
}