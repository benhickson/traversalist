<?php
use Dotenv\Dotenv;

// include composer vendor libraries
require_once 'vendor/autoload.php';

// load the env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();