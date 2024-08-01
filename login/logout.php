<?php
session_start();
session_destroy();

$response = [
    'status' => 'success',
    'message' => 'Logout berhasil.'
];

echo json_encode($response);
?>
