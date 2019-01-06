<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Database configuration

    $dbHost     = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName     = "jillGoddardCaught";

    // create databse connection

    $mysqli = new mysqli("localhost", "root", "1313");
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    // select database or create it 

    $query="CREATE DATABASE IF NOT EXISTS ".$dbName." ";
    $result = $mysqli->query($query);
    $mysqli->select_db($dbName);

    // create table if not exist

    $query="
            CREATE TABLE IF NOT EXISTS `files` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
            `uploaded_on` datetime NOT NULL,
            `views` int(11) NOT NULL DEFAULT '0' ,
            PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
    ";

    if(! $result = $mysqli->query($query)){
        printf("error: %s\n", $mysqli->error );
        exit();
    }
    /*

    $query = "ALTER TABLE files CHANGE COLUMN `views` `views` int(11) unsigned DEFAULT '500' ;";
    if(! $result = $mysqli->query($query)){
        printf("error: %s\n", $mysqli->error );
        exit();
    }

     */

    $mysqli->close();	

    // Create database connection

    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Check connection

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

?>
