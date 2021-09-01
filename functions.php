<?php
//require mysql connection
    require('./database/DBController.php');
    //require product cart
    require('./database/Product.php');
    //controller obj
    $db=new DBController();

    //product obj
    $product=new Product($db);

    print_r($product->getData());
