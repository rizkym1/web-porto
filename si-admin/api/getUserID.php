<?php
session_start();
header("Content-Type: application/json; charset=UTF-8");

if (isset($_SESSION['user_id'])) {
    echo json_encode(['user_id' => $_SESSION['user_id']]);
} else {
    echo json_encode(['error' => 'User not logged in']);
}
