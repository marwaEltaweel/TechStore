<?php

require_once("app.php");
// echo PATH;

// require_once('classes/Models/Order.php');
// require_once('classes/Models/Product.php');

// $cnt = new Product;
// $res = $cnt->insert("name, `desc`, price, pieces_no, img, cat_id", "'showMe', 'this is dummy data for showMe', 95000, 80, '8.jpg', 3");
// // print_r($res);
// var_dump($res);

echo $request->get('name');


?>