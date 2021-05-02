<?php

//PATH:
// $path="C:/xampp/htdocs/techstore/";
// $path=__DIR__ . "/";
define("PATH", __DIR__ . "/");// to change it to constant
define("URL", "http://localhost/techstore/");

/*
we use PATH at : include, include_once, require, require_once
we use URL at : assets, css links, java script links, HTML links 'href', header(location)
*/
//DB:
define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "techstore");

//include classes:

require_once(PATH . "vendor/autoload.php");

require_once(PATH. "classes/Request.php");
require_once(PATH. "classes/Session.php");
// require_once(PATH. "classes/validation/Email.php");
// require_once(PATH. "classes/validation/Max.php");
// require_once(PATH. "classes/validation/Numeric.php");
// require_once(PATH. "classes/validation/Required.php");
// require_once(PATH. "classes/validation/Str.php");
// require_once(PATH. "classes/validation/ValidationRule.php");
// require_once(PATH. "classes/validation/Validator.php");
// require_once(PATH. "classes/Models/Cat.php");
// require_once(PATH. "classes/Models/Order.php");
// require_once(PATH. "classes/Models/OrderDetails.php");
// require_once(PATH. "classes/Models/Product.php");



//objects:
/* there are tow classes we alwayes need them SO we will creat object from them 
here on app.php but other classes we will create object from them when we needed */

// we need import all classes 'use' with there namespace to can use them


use TechStore\Classes\Request;
use TechStore\Classes\Session;

//objects:
$request = new Request;
$session = new Session;

?>