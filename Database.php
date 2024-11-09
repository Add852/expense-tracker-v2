<?php

// suggest lang 
// dat pala dito naka abang if yung create database and table if existing or hindi.
// para kung sakali na, gusto nila i try sa ibang device, no need to create manually
// kusa syang magkecreate ng sarili nya

// tas puru SELECT/ INSERT / UPDATE / DELETE nalang nun mga query natin
// tapos yung database dapat need ma call out palang doon sa index.php
// since yun yata ung starting page natin.
// para kung sakali, automatic, naka initialize na yung database and tables 
// mag ke create sya ng database and tables if not existing.
// then kahit mag crud nlang nun sa iba clal nalang natin lagi yung _construct() nun sa twing 
// gagamit tayo ng CRUD

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
}
