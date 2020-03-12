<?php
//新しいデータベースの場合は、先にphpMyAdminの権限設定を有効にすること

$user       = 'shiro';
$password   = 'sunyou00';
$dbName     = 'sunyou_maintenance_system';
$host       = 'localhost';
$dsn        = "mysql:host={$host};dbname={$dbName};charset=utf8";
$pdo        = new PDO($dsn, $user, $password);
$sql        = "INSERT INTO TEST_TABLE(name) VALUES (10)";
$stm        = $pdo->prepare($sql);
$stm        ->execute();
$dsn        = NULL;

?>
