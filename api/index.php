<?php
// api/index.php

// Menampilkan info untuk memastikan PHP jalan
echo json_encode([
    "status" => "success",
    "message" => "PHP is running on Vercel!",
    "path" => $_SERVER['REQUEST_URI']
]);
