<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/WordMatch.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
      return $app['twig']->render('home.html.twig');
    });

    $app->post('/answer', function() use ($app) {
      $matcher = new WordMatch;
      $input1 = $_POST['word'];
      $input2 = $_POST['phrase'];
      $result = $matcher->checkMatch($input1, $input2);
      return $app['twig']->render('home.html.twig', array('result' => $result, 'word' => $input1, 'phrase' => $input2));
    });

    return $app;

 ?>
