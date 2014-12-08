<?php
error_reporting(0);
?>

<?php


    $host = 'localhost';
    $dbname='forum';
    $username = 'root';
    $password = '';

    $db = new mysqli($host, $username, $password,$dbname);
    if (mysqli_connect_errno()) {
		//echo 'Warning: Database Error.';
		//echo mysql_errno($db) . ": " . mysql_error($db) . "\n";
        include('database_error.php');
        exit();
    }
   // else echo 'Connect was successful';
?>