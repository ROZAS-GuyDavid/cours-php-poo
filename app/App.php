<?php

namespace App;

class App{

    const DB_NAME = 'blog';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_HOST = 'localhost';

    private static $title = 'Mon super site';
    private static $database;

    public static function getDb(){
        if (self::$database === null) {
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;

    }

    public static function notFound(){ 
        header("HTTP/1.0 404 Not Found");
        header('location:index.php?p=404');
    }

    public static function getTitle(){
        return self::$title;
    }

    public static function setTitle($title){
        return self::$title = $title;
    }
}