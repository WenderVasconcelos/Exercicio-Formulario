<?php

class Formulario {
    private $nome;
    private $matricula;
    private $idade;
    private $cpf;
    private $cidade;
    
    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name=$value;
    }
    
    public function exibeArray(){
        strtoupper($this->nome);
        
        $x[] = $this->nome;
        $x[] = $this->matricula;
        $x[] = $this->idade;
        $x[] = $this->cpf;
        $x[] = $this->cidade;
        
        return $x;
    }

    public function varreArray(){
        $exibe="<br/>";
        foreach ($this->exibeArray() as $f){
            //$exibe.=$d."<br/>";
            $exibe=$exibe.$f."<br>";
        }
        return $exibe;
    }

    public function varreArrayImplode(){
        $valor= implode("<br>", $this->exibeArray());
        
        return $valor;
    }

        public function __toString() {
        return  "Dados exibidos via Array:<br/>".$this->varreArrayImplode();               
    }

}
