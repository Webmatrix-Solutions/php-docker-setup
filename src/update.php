<?php
require 'db.php';

$stmt = $pdo->prepare("UPDATE users SET name = ? WHERE id = ?");
$stmt->execute(['Updated Abir', 1]);

echo "User updated";
