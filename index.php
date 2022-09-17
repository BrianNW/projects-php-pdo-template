<?php
    // set db connection variables
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'pdoposts';

    // Set datasource name
    $dsn = 'mysql:host=' . $host . ';dbname='. $dbname;

    // Create PDO instance
    $pdo = new PDO($dsn, $user, $password);

    // PDO query
    $stmt = $pdo->query('SELECT * FROM posts');

    // Check if row = statement, then fetch results
    // while($row = $stmt->fetch()) {
    //     echo $row['title']. '<br>';
    // }

    // Create same statement as above as an object
    while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
        echo $row->title. '<br>';
    }
 
?>