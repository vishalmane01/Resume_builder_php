<?php
date_default_timezone_set('Asia/Calcutta');
class Database
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'resume_builder';
    private $db = null;

  

    function __construct(){
        $this->db= new mysqli($this->host,$this->username,$this->password,$this->database);
    }

    public function connect(){
        return $this->db;
    }
}

$db = new Database();
$db = $db->connect();