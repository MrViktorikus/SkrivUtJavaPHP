<?php


define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "spelbutik");
$dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8';
$attributes = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
$dbm = new PDO($dsn, DB_USER, DB_PASSWORD, $attributes);

$sql = "SELECT * FROM produkter WHERE 1";

$stmt = $dbm->prepare($sql);
$stmt->execute();
$infos = $stmt->fetchAll();

$produkter["produkter"] = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($infos);
?>
