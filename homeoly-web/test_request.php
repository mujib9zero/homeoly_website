<?php
try {
    require 'vendor/autoload.php';
    $app = require_once 'bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $response = $kernel->handle($request = Illuminate\Http\Request::capture());
    echo "Status: " . $response->getStatusCode() . PHP_EOL;
    if ($response->getStatusCode() != 200) {
        echo substr($response->getContent(), 0, 1500) . PHP_EOL;
    }
} catch (Throwable $e) {
    echo "Exception: " . $e->getMessage() . PHP_EOL;
    echo $e->getTraceAsString() . PHP_EOL;
}
