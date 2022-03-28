<?php

class Database {


    public static function getPdo(){
        return  new PDO('mysql:host=localhost;dbname=tp_mvc', 'root','root');
    }
    
}