<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use($app) {
  return "You are in home";
});

$app->get('/{name}', function($name) use($app) {
    return 'Hello '.$app->escape($name);
});

$app->run();
