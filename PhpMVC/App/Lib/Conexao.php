<?php

namespace App\Lib;

use PDO;
use PDOException;
use Exception;

abstract class Conexao
{
        const bdServerName = "localhost";
        const bdname = "npaluno";
        const username = "root";
        const senha = "";
        
    private static $connection;

    private function __construct(){}

    public static function getConnection() {
         try{
            if(!isset($connection)){
                $conn = new PDO("mysql:host=".self::bdServerName.";Bdname=".self::bdname, self::username, self::senha,a);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;  
    
                return $connection;

            }
        } catch (PDOException $pdo ) {
            throw new Exception("Erro de conexão com o banco de dados",500);
        }
    }
}