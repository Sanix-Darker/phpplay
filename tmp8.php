<?php

// adapter pattern

interface Car {
    public function startEngine();
    public function stopEngine();
}

class BMW {
    public function checkFuel() {
        return true;
    }

    public function run(){
        if ($this->checkFuel()){
            echo "BMW running";
        }else{
            echo "ERROR fill fuel";
        }
    }
}

class BMWAdapter implements Car {

}

class Tesla{
    public function checkBatterie(){
        return true;
    }

    public function broum(){
        if ($this->checkBatterie()){
            echo "Tesla brouming";
        }else{
            echo "ERROR not enought batterie";
        }
    }
}

