<?php

/**
 * Laravel Subdirectory & Asset Handler
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Serve public assets if they exist
$publicFile = __DIR__ . '/public' . $uri;
if ($uri !== '/' && file_exists($publicFile) && !is_dir($publicFile)) {
    $extension = pathinfo($publicFile, PATHINFO_EXTENSION);
    $mimes = [
        'css' => 'text/css',
        'js'  => 'application/javascript',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg'=> 'image/jpeg',
        'gif' => 'image/gif',
        'svg' => 'image/svg+xml',
        'webp'=> 'image/webp',
        'woff'=> 'font/woff',
        'woff2'=>'font/woff2',
        'ttf' => 'font/ttf',
        'otf' => 'font/otf',
    ];
    header('Content-Type: ' . ($mimes[$extension] ?? 'application/octet-stream'));
    readfile($publicFile);
    exit;
}

// Subdirectory Logic for Laravel
$scriptName = $_SERVER['SCRIPT_NAME'];
$baseDir = str_replace('\\', '/', dirname($scriptName));
if ($baseDir === '.' || $baseDir === '/') $baseDir = '';
$baseDir = rtrim($baseDir, '/');

$relativeUri = $uri;
if ($baseDir !== '' && strpos($uri, $baseDir) === 0) {
    $relativeUri = substr($uri, strlen($baseDir));
}

// Re-check for assets in subdirectory installations
if ($relativeUri !== $uri) {
    $publicFile = __DIR__ . '/public' . $relativeUri;
    if ($relativeUri !== '/' && file_exists($publicFile) && !is_dir($publicFile)) {
        $extension = pathinfo($publicFile, PATHINFO_EXTENSION);
        header('Content-Type: ' . ($mimes[$extension] ?? 'application/octet-stream'));
        readfile($publicFile);
        exit;
    }
}

// Fallback to Laravel's public index.php
require_once __DIR__ . '/public/index.php';
