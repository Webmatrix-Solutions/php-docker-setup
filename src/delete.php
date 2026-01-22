<?php
require 'db.php';

$stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
$stmt->execute([1]);

echo "User deleted";
