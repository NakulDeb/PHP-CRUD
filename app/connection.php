<?php
    define("DB_HOSTNAME", "localhost");
    define("DB_USERNAME", "root");
    define("DB_NAME", "php_ninja_crud");
    define("DB_PASSWORD", "");

    $conn = new \mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME) or die("Connection fail!");