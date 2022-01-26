<?php
 //require mysql connection
 require('database/DBController.php');

//require Product Class
require('Database/fetchproduct.php');

//require Cart Class
require('Database/cartDatabase.php');


//DBController object
$db = new DBController();

//product oblect
$product = new Product($db);


//cart object

$cart = new Cart($db);

$arr = array(

    "user_id"=>2,
    "item_id"=>4
);

$cart->insertintoCart($arr);



?>