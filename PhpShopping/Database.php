<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author Amang8662
 */
class Database {
    private $host;
    private $dbuser;
    private $dbpassword;
    private $database;
    
    function _construct($filename)
    {
        if(is_file($filename))  include $filename;
        else throw new Exception ("Error!");
        $this->host=$host;
        $this->dbuser=$dbuser;
        $this->dbpassword=$dbpassword;
        $this->database=$database;
        $this->connect();        
    }
    
    private function connect()
    {
        if(!mysqli_connect($this->host,$this->dbuser,$this->dbpassword,$this->database))
        throw new Exception ("Error while connecting to db");
    }
}
