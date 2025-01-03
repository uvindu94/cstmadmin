<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

    // Database connection
// $conn = new mysqli('localhost', 'sltdigi2_giftvouchers', '4lln2gts@#1', 'sltdigi2_giftvouchers');
    $conn = new mysqli('localhost', 'root', '', 'unigran');

    if ($conn->connect_error) {
        echo json_encode(['code' => 500, 'message' => 'Database connection failed']);
        exit();
    }
    ?>