<?php

class Database
{
    //will store established database connection
    public $connection;

    //create database (Will only be executed initially when a Database instance is created)
    public function __construct()
    {
        try {
            // the remote mysql server we will be using
            $uri = "mysql://avnadmin:AVNS_f8o7HWTkd-96oSm9STx@mysql-6ef4ff5-xadd852x-362b.j.aivencloud.com:16921/defaultdb?ssl-mode=REQUIRED";
            $fields = parse_url($uri);
            // build the DSN including SSL settings
            $conn = "mysql:";
            $conn .= "host=" . $fields["host"];
            $conn .= ";port=" . $fields["port"];;
            $conn .= ";dbname=defaultdb";
            $conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";
            //passes the pdo connection to this database's $connection so it can be used outside this function
            $this->connection = new PDO($conn, $fields["user"], $fields["pass"]);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    //perform a database query
    public function query($query, $params)
    {
        try {
            $stmt = $this->connection->prepare($query);
            $stmt->execute($params);
            return $stmt;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }




// gumamit ako ng static function para dina need irenew 
//yung function sa twing iko call mo.

// kumbaga directed na yung mga updates if ever man.


    public class functions_inDB{
        
        public static function load_expensedata()
        {
            // get data from expense table
        }

    }









}

//create database instance
$db = new Database();



