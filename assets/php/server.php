<?php
include "Database.php";
$db = new Database();
$users = $db->query('SELECT * FROM user')
    ->fetchAll();

echo json_encode(
    ["users" => $users]

);