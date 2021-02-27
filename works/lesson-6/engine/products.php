<?php

function getProducts() {
    return queryDbGeekbrains("SELECT * FROM products");
}