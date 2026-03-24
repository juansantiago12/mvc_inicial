<?php

spl_autoload_register(function($class) {
    // Map namespace prefixes to real directories (case-sensitive on Linux).
    $namespaceMap = [
        'Lib\\' => 'lib/',
    ];

    $relativePath = str_replace('\\', '/', $class) . '.php';

    foreach ($namespaceMap as $namespacePrefix => $directoryPrefix) {
        $namespacePrefixPath = str_replace('\\', '/', $namespacePrefix);
        if (str_starts_with($relativePath, $namespacePrefixPath)) {
            $relativePath = $directoryPrefix . substr($relativePath, strlen($namespacePrefixPath));
            break;
        }
    }

    $file = __DIR__ . '/' . $relativePath;
    if (file_exists($file)) {
        require_once $file;
    }
    else {
        die('Class not found: ' . $class);
    }
});