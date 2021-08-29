<?php

require_once __DIR__ . "/../vendor/autoload.php";

use nguyenanhung\PhpFileCache\PhpFileCache;

try {
    $cache = new PhpFileCache(__DIR__ . '/../cache');
    // initialise with different cache folder

    // first key, then refresh callback and cache time for last
    // see documentation of the refreshIfExpired function for more
    $data = $cache->refreshIfExpired("simple-cache-test", function () {
        echo "Refreshing data!" . PHP_EOL;

        return date("H:i:s"); // return data to be cached
    }, 10);

    echo "Latest cache save: $data";

}
catch (Exception $e) {
    echo $e->getMessage();
}