<?php

require_once __DIR__ . '/../vendor/autoload.php';
if (file_exists(__DIR__ . "/../.env")){
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/..");
    $dotenv -> load();
    }
else{
    die("Error: .env file not found.");
    }
$mongo_login = $_ENV['MONGO_LOGIN'];
$client = new MongoDB\Client($mongo_login);
?>