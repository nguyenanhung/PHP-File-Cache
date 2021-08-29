<?php

require_once __DIR__ . "/../vendor/autoload.php";

use nguyenanhung\PhpFileCache\PhpFileCache;

try {
    $cache = new PhpFileCache(__DIR__ . "/../cache/");

// Traditional procedure, without using the refreshIfExpired shortcut.
    if ($cache->isExpired("simple-cache-test-traditional")) {
        $store = date("H:i:s"); // data to cache. can be any type you like
        $cache->set("simple-cache-test-traditional", $store, 10);
    }

    $data = $cache->get("simple-cache-test-traditional");

    echo "Latest cache save: $data";
}
catch (Exception $e) {
    echo $e->getMessage();
}