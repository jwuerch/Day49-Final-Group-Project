<?php

    $app = new Silex\Application();
    $server = 'mysql:host=localhost;dbname=poly_date';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);
    $name = 'hello';
?>
