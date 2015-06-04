<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;
$blackrock = include 'blackrock.php';

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return 'er'.$blackrock.'er';
});

$app->run();


?>
