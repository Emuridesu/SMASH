<?php

class AccountDAO
{
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectbyName($name)
    {
        $sql = "select 
        id, 
        name, 
        hashed_password 
    from 
        accounts
    where
        name = :name";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":name",$name,PDO::PARAM_STR);
        $stmt->execute();
        $account = $stmt->fetch();
        return $account;
    }

    public function insert($name,$hashed_password)
    {
        $sql = "insert into accounts (name,hashed_password) 
        values (:name,:hashed_password)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":name",$name,PDO::PARAM_STR);
        $stmt->bindValue(":hashed_password",$hashed_password,PDO::PARAM_STR);
        $stmt->execute();
        

    }

}

?>
