<?php

class ValidationError extends Exception {}

class User{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age){
        $this->setName($name);
        $this->setAge($age);
    }

    public function setName(string $name): void{
        if(strlen($name) < 3 || strlen($name) > 10){
            throw new ValidationError(
                "name $name len is not between 3 < x < 10"
            );
        }
        $this->name = $name;
    }

    public function setAge(int $age): void{
        if($age < 10 || $age > 50){
            throw new ValidationError(
                "age $age should be between 10 < x < 50"
            );
        }
        $this->age = $age;
    }

    public function __toString(): string{
        return json_encode([
            "name" => $this->name,
            "age" => $this->age
        ]);
    }
}

// the only responsability of this is to create a new user
class UserFactory{
    public function build(string $name, int $age): User{
        return new User($name, $age);
    }
}

$uF = new UserFactory();
$sanix = $uF->build("sanix", 30);
$meryl = $uF->build("meryl", 27);
print_r($sanix);
var_dump($sanix);
?>
