<?php

class Database{
    private string $hostname;
    private string $user;
    private string $password;

    public function __construct(
        string $hostname,
        string $user,
        string $password
    ){
        $this->hostname = $hostname;
        $this->user = $user;
        $this->password = $password;
    }

    public static function whoami(){
        return "DOUM";
    }

    public function query(string $query): array{
        throw new Exception("Not implemented.");
    }
}

class MongoDatabase extends Database {
    public function query(string $query): array{
        return [];
    }
}

class PostgresDatabase extends Database {
    public function query(string $query): array{
        return [];
    }
}

$pg = new PostgresDatabase("host:111", "doum", "pass");
print_r($pg->query("this"));
print_r(PostgresDatabase::whoami());
