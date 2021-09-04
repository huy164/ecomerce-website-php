<?php
//require mysql connection
    require('./database/DBController.php');
    //require product 
    require('./database/Product.php');
    //require cart class
    require('./database/Cart.php');
    //controller obj
    $db=new DBController();

    //product obj
    $product=new Product($db);

  $arr=array();
    //cart obj
    $Cart=new Cart($db);
    $Cart->insertIntoCart($arr);
