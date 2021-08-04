<?php

class Db {
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $charset;



    public function connect(){
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = 'youdbpassword';
        $this->dbname = 'yourdbname';
        $this->charset = 'utf8mb4';

        try{
            $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->username,$this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }catch (PDOException $e){
            echo "Connection failed, check your password or username: ".$e->getMessage();

        }


    }













}



