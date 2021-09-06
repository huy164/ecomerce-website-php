<?php
//require mysql connection
require('./database/DBController.php');
//require product 
require('./database/Product.php');
//require cart class
require('./database/Cart.php');
//controller obj
$db = new DBController();

//product obj
$product = new Product($db);
$product_suffle=$product->getData();
shuffle($product_suffle);

$arr = array();
//cart obj
$Cart = new Cart($db);
