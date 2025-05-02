<?php

class Database{
    private $pdo;

    public function __construct($host,$dbname,$username,$password){
        $dsn = "mysql:host=$host;dbname=$dbname";

        try{
            $this->pdo=new PDO($dsn,$username,$password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die("Connection Failed:". $e->getMessage());
        }
    }



public function fetchStudent($id){
    $stmt=$this->pdo->prepare("Select * From students WHERE id=: id");
    $stmt->execute(['id=>$id']);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
}
?>