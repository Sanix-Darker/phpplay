<?php

interface Printer {
   public function load(string $input): void;
   public function print(): string;
}

class Engine implements Printer {
    public string $formater;
    public string $result;

    public function __construct(string $formater){
       $this->formater = $formater;
    }

    public function load(string $input): void{
        $this->result = $this->formater ."::". $input;
    }

    public function print(): string{
       return $this->result;
    }
}

class HPEngine extends Engine {
    public function __construct(string $formater){
        parent::__construct($formater);
    }

    public function load(string $input): void {
        $this->result = $this->formater ."--". $input;
    }
}

$hpp = new HPEngine("$");
$hpp->load("tintin do");
var_dump($hpp->print());

?>
