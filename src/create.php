<?php
require 'db.php';

$stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$stmt->execute(['Abir', 'abir@example.com']);

echo "User inserted successfully";
