<?php
require 'vendor/autoload.php';

// use Dotenv\Dotenv;
use Src\System\{DatabaseConnector};

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// test code, should output:
// root
// when you run $ php bootstrap.php
// echo $_ENV['DB_USERNAME'];

$dbConnection = (new DatabaseConnector())->getConnection();