<?php

namespace App\DAO;

use App\Model\Client;
use PDO;

class ClientDAO 
{
    private $conexao;
    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=financeapp";
        $this->conexao = new PDO($dsn,'root','');
    }
    public function insert(Client $client)
    {
        $sql = "INSERT INTO clients (name, email, phone,phone2) VALUES (?,?,?,?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$client->getName());
        $stmt->bindValue(2,$client->getEmail());
        $stmt->bindValue(3,$client->getPhone());
        $stmt->bindValue(4,$client->getPhone2());
        $stmt->execute();
    }

    public function update()
    {
    }

    public function selectAll()
    { 
       $sql = "SELECT * FROM clients";
       $stmt = $this->conexao->prepare($sql);
       $stmt->execute();
       return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}