<?php
$host = 'localhost';
$db = 'islingtoncollegedatabase';
$user = 'root';
$pass = '';
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

$pdo = new PDO($dsn, $user, $pass);


?>