<?php

namespace System\Database\DBBuilder;

use System\Config\Config;
use System\Database\DBConnection\DBConnection;

class DBBuilder
{

    public function __construct()
    {
        $this->createTables();
        die("migrations run successfully");
    }

    private function getMigrations(){

        $oldMigrationsArray = $this->getOldMigration();
        $migrationsDirectory = Config::get('app.BASE_DIR') . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'migrations' . DIRECTORY_SEPARATOR;
        $allMigrationsArray = glob($migrationsDirectory . "*.php");
        $newMigrationsArray = array_diff($allMigrationsArray, $oldMigrationsArray);
        $this->putOldMigration($allMigrationsArray);
        
        $sqlCodeArray = [];
        foreach($newMigrationsArray as $filename){
            $sqlCode = require $filename;
            array_push($sqlCodeArray, $sqlCode[0]);
        }
        return $sqlCodeArray;
    }

    private function getOldMigration(){
        $data = file_get_contents(__DIR__.'/oldTables.db');
        return empty($data) ? [] : unserialize($data);
    }

    private function putOldMigration($value){
        file_put_contents(__DIR__.'/oldTables.db', serialize($value));
    }

    private function createTables()
    {
        $migrations = $this->getMigrations();
        $pdoInstance = DBConnection::getDBConnectionInstance();
        foreach($migrations as $migration){
            $statement = $pdoInstance->prepare($migration);
            $statement->execute();
        }
        return true;

    }




}