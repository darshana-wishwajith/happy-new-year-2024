<?php
    class Database{
        public static $connection;

        public static function setupConnection(){
            if(!isset(Database::$connection)){
                Database::$connection = new mysqli("localhost", "root", "Darshana@1234", "new_year_2024_db", "3306");
            }
        }

        public static function insert_update_delete($query){
            Database::setupConnection();
            Database::$connection->query($query);
        }

        public static function search($query){
            Database::setupConnection();
            $result_set = Database::$connection->query($query);
            return $result_set;
        }
    }
?>