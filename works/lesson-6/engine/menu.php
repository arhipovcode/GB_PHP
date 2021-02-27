<?php
include ENGINE_DIR . 'connection.php';

function getMenu() {
    return queryDbGeekbrains("SELECT * FROM menu");
}