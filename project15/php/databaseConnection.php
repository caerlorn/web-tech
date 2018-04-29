<?php

class DatabaseConnection
{
    public function getConnection()
    {
        // check you environment setup and update the info below, if needed.
        $host = 'ec2-18-197-115-58.eu-central-1.compute.amazonaws.com';
        $port = '3306';
        $user = 'group_15_user';
        $password = 'br3j7jX2tOTdOhpy';
        $database = 'group_15_user_';

        // optional
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // set the PDO error mode to exception
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Specifies that the fetch method should return each row as an array
        ];

        // We are putting the connection code inside a try and catch block
        // This will allow us to handle any problem that may occur
        try {
            $dsn = "mysql:host={$host};port={$port};dbname={$database};charset=utf8mb4";
            $pdo = new PDO($dsn, $user, $password, $opt);
            return $pdo;
        } catch (PDOException $exception) {
            print_r($exception->getMessage());

        }

        // if the code execution reached here, it means an error has occurred, so we will return null
        // to indicate to the caller of this method that the pdo object is null/empty
        return null;
    }
}