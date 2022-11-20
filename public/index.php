<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';

use App\project\database\Database;

$database = new Database("newDatabase");
$database->setType("mysql");
$database->setHost("localhost");
$database->setPort("3306");
$database->setUser("admin");
$database->setPassword("toto5638");
$database->distFiles();
