<?php
require './Slim/Slim.php';
\Slim\Slim::registerAutoloader();


$setting = array(
    "debug" => true,
    "templates.path" => "./templates"
);

$app = new \Slim\Slim($setting);
$app->get('/top',  function () use ($app){
    $app->render("top.php");
});

$app->get('/feed', function () use ($app){
    //$req = $app->request();
    //$url = $req->post("url");
});

$app->run();