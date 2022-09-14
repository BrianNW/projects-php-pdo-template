<?php
    // set db connection variables
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbName = 'pdoposts';

    // Set datasource name
    $dsn = 'mysql:host=' . $host . ';dbname='. $dbname;

    // Create PDO instance
    $pdo = new PDO($dsn, $user, $password);

?>