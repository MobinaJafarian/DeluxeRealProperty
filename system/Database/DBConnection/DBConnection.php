<?php


namespace System\Database\DBConnection;

use PDO;
use PDOException;
use System\Config\Config;

class DBConnection{

    private static $dbConnectionInstance = null;

    private function __construct(){

    }

    public static function getDBConnectionInstance(){

        if(self::$dbConnectionInstance == null){
            $DBConnectionInstance = new DBConnection();
            self::$dbConnectionInstance = $DBConnectionInstance->dbConnection();
        }

        return self::$dbConnectionInstance;

    }

    private function dbConnection(){

        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8");
        try{
            return new PDO("mysql:host=" . Config::get('database.DBHOST') . ";dbname=" . Config::get('database.DBNAME'), Config::get('database.DBUSERNAME'), Config::get('database.DBPASSWORD'), $options);
        }
        catch (PDOException $e){
            echo "error in database connection: " . $e->getMessage();
            return false;
        }

    }


    public static function newInsertId(){

        return self::getDBConnectionInstance()->lastInsertId();

    }

}