<?php
$host = "localhost:3306";
$username = "root";
$password = "";
$dbname = "railway reservation system";

//set dsn
$dsn = 'mysql:host='.$host.'; dbname='.$dbname;

//pdo instance
$pdo = new PDO($dsn,$username,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


?> 