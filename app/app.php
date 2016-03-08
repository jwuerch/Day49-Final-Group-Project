<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/User.php';

    $app = new Silex\Application();
    $server = 'mysql:host=localhost;dbname=poly_date';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);
    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
      return $app['twig']->render('index.html.twig');
    });

    $app->get('/register', function() use ($app) {
        return $app['twig']->render('register.html.twig');
    });

    $app->get('/user_profile/{id}', function($id) use ($app) {

        return $app['twig']->render('user_profile.index.twig');
    });

    $app->post('/register_new_user', function() use ($app) {

        return $app['twig']->render('new_profile_created.index.twig');
    });



    return $app;

 ?>
