<?php 

require_once("vendor/autoload.php");
require "vendor/autoload.php";

//$app = new \Slim\Slim\();

$app = new Slim\App();
$app->config('debug', true);

$app->get("/", function(){

echo 'Hello World';
});

$app->run();

$app->config('debug', true);

$app->get('/', function() {
    
	echo "OK";

});

$app->run();

 ?>