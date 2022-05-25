<?php

require_once __DIR__ . "/../vendor/autoload.php";
require_once('model.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/..");
$dotenv->load();
$Model = new Model();
$parameter = json_decode(file_get_contents('php://input'), true);
$url_name = $parameter['url_name'];

$sql = $Model->select('url_list', ['url_dest']) . $Model->where('url_name', '=', $url_name);
$url_dest = $Model->execute($sql);
if ($url_dest) {
    $result = json_encode($url_dest);
} else {
    $result = json_encode(false);
}

header("Content-Type: application/json;");
echo $result;
