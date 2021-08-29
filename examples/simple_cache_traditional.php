<?php

require_once __DIR__ . "/../vendor/autoload.php";

use nguyenanhung\PhpFileCache\PhpFileCache;

try {
    $cache = new PhpFileCache(__DIR__ . "/../cache/");

    // Traditional procedure, without using the refreshIfExpired shortcut.
    if ($cache->isExpired("hungna-simple-cache-test-traditional")) {
        $store = date("H:i:s"); // data to cache. can be any type you like
        $cache->set("hungna-simple-cache-test-traditional", $store, 10);
    }

    $data = $cache->get("hungna-simple-cache-test-traditional");

    echo "hungna - Latest cache save: $data";
}
catch (Exception $e) {
    echo $e->getMessage();
}