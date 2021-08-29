<?php

require_once __DIR__ . "/../vendor/autoload.php";

use nguyenanhung\PhpFileCache\PhpFileCache;

try {
    $cache = new PhpFileCache(__DIR__ . "/../cache/");

    $data = $cache->refreshIfExpired("simple-cache-meta-test-meta", function () {
        echo "Refreshing data!" . PHP_EOL;

        return date("H:i:s"); // return data to be cached
    }, 10, TRUE); // true = return with metadata

    /*
    Example cached item retrieved with metadata:
    {
        "time":1511667506, <-- save unix timestamp
        "expire":10,       <-- expire time in seconds
        "data":"04:38:26", <-- unserialized data
        "permanent":false
    }

    Using metadata, we can, for example, calculate when item was saved or when it expires
    We can also access the data itself with the "data" key
    */

    $expiresIn  = ($data["time"] + $data["expire"]) - time(); // get unix timestamp when data expires and subtract current timestamp from it
    $cachedDate = $data["data"]; // we access the data itself with the "data" key

    echo "Latest cache save: $cachedDate, expires in $expiresIn seconds";
}
catch (Exception $e) {
    echo $e->getMessage();
}