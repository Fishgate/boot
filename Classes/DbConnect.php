<?php

/**
 * Initiates a databse connection using details defined in ../config.php and sets PDO error mode attribute to error mode Exception for testing.
 *
 * @author Kyle Vermeulen <kyle@source-lab.co.za>
 */

class DbConnect {
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_PASSWORD, DB_USERNAME, DB_PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
    
}

