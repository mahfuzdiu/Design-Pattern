<?php

Class Database
{
    private static $connection = null;
    
    // making construct prive so that Database class can't be instantiated
    private function __construct()
    {
    }
    
    public static function startConnection()
    {
        if(self::$connection == null){
            //echo 'connected' . '<br>';
            self::$connection = new Database();   
            
        }else{        
            //echo 'already connected' . '<br>';
        }
        
       return self::$connection;        
    }
}


Class User
{
    public $con;
    
    public function connectToDb()
    {
        $this->con = Database::startConnection();
    }
}

$user = new User();
$user->connectToDb();
$user->connectToDb();
$user->connectToDb();