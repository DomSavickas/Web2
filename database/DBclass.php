<?php
class DBclass {

    protected static $con;

    private function __construct() {

        try {

            self::$con = new PDO( 'mysql:charset=utf8mb4;host=localhost;port=3306;dbname=company_db', 'root', '' );
            self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );

        } catch (PDOException $e) {
            echo $e;
            echo "Could not connect to database."; exit;
        }

    }


    public static function getConnection() {

        if (!self::$con) {
            new DBclass();
        }

        return self::$con;
    }
}

?>