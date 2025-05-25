<?php
include "./pages/Shop/Shop.php";

$productsDB = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC LIMIT 3");

$mini_products_array = array($productsDB[1], $productsDB[2]);
$first_product_array = array($productsDB[0]);
$product_array =  $first_product_array;
