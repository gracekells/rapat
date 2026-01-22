<?php
// Buat folder yang dibutuhkan di /tmp agar tidak error Read-only
$required_dirs = ['/tmp/storage/framework/views', '/tmp/storage/framework/sessions', '/tmp/storage/framework/cache', '/tmp/bootstrap/cache'];
foreach ($required_dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

require __DIR__ . '/../public/index.php';