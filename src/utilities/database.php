<?php

class Database
{
    public $connection;

    public function __construct($config, $username, $password)
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query(string $sql)
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        return $statement;
    }
}