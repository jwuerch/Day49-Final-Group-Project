<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/User.php';
    require_once __DIR__.'/../src/login.php';

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
        $username = $_POST['username'];
        $password = $_POST['password'];
        $identity = $_POST['identity'];
        $name = $_POST['name'];
        $status = $_POST['status'];
        $kink_friendly = $_POST['kink_friendly'];
        $birthday = $_POST['birthday'];
        $display_name = $_POST['display_name'];
        $email = $_POST['email'];
        $about_me = $_POST['about_me'];
        $interests = $_POST['interests'];
        $seeking_gender = $_POST['seeking_gender'];
        $seeking_relationship_type = $_POST['seeking_relationship_type'];
        $last_login = date("Y-m-d");
        $city_id = 1;
        $zip_code_id = 2;
        $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
        $test_user->save();
        return $app['twig']->render('all_users.html.twig', array('all_users' => User::getAll()));
    });

    $app->get('/all_users', function() use ($app) {
        return $app['twig']->render('all_users.html.twig', array('all_users' => User::getAll()));
    });

    $app->post('/delete_all_users', function() use ($app) {
        User::deleteAll();
        return $app['twig']->render('all_users.html.twig', array('all_users' => User::getAll()));
    });



    return $app;

 ?>
