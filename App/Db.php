<?php

namespace App;

class Db
{

    protected $dbh;

    public function __construct()
    {
        try {
            $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=php2', 'root', '');
        } catch (\PDOException $e) {
            throw new \Exception('Ошибка соединения с БД');
        }
    }

    public function execute(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($data);
        if (false === $result) {
            throw new \Exception('Ошибка запроса к БД');
        }
        return true;
    }

    public function query(string $sql, array $data = [], $class = null)
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($data);
        if (false === $result) {
            throw new \Exception('Ошибка запроса к БД');
        }
        if (null === $class) {
            return $sth->fetchAll();
        } else {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

}