<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('odbc:Driver={MS Access Database (*.mdb, *.accdb)};Dbq=C:/xampp/htdocs/tes/db_frs.mdb');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}