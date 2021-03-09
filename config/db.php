<?php

class DataBase{
    public static function connect(){
        $db = new mysqli("127.0.0.1:3308","admin_tienda_virtual","123456","db_tienda_virtual");
        $db->query("SET NAMES 'utf8'");
        return $db;
    }

}