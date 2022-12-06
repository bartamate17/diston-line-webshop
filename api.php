<?php

require_once 'config/config.php';
require_once 'controller/ProductsController.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

if ($uri[2] !== 'products') {
    header("HTTP/1.1 404 Not Found");
    exit();
}

$productId = null;
if (isset($uri[3])) {
    $productId = (int) $uri[3];
}

$db = new Database();
$dbConnection = $db->getConnection();
$requestMethod = $_SERVER["REQUEST_METHOD"];
$controller = new ProductsController($dbConnection, $requestMethod, $productId);
$controller->processRequest();