<?php
class DB {
    public static function connect() {
        return new PDO("mysql:host=localhost;dbname=nomina_db", "root", "", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}
