<?php

function getConnection() {
    static $connection = null;
    if(is_null($connection)) {
        $config = include CONFIG_DIR . "db_geekbrains.php";
        $connection = mysqli_connect(
            $config['host'],
            $config['login'],
            $config['password'],
            $config['dbName']
        );
    }
    return $connection;
}

function queryDbGeekbrains(string $sql) {
    $res = mysqli_query(getConnection(), $sql);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function updateDb(string $sql) {
    return mysqli_query(getConnection(), $sql);
}