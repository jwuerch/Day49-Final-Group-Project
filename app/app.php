<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/User.php';
    require_once __DIR__.'/../src/City.php';
    require_once __DIR__.'/../src/ZipCode.php';
    require_once __DIR__.'/../src/Identity.php';

    $app = new Silex\Application();
    $server = 'mysql:host=localhost;dbname=poly_date';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();

    session_start();
    if(empty($_SESSION['user'])) {
      $_SESSION['user'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
      return $app['twig']->render('index.html.twig', array('all_cities' => City::getAll(), 'all_identities' => Identity::getAll(), 'session' => $_SESSION['user']));
    });

    $app->get("/users_basic_search", function() use ($app) {
        $my_identity = Identity::find($my_identity = $_GET['my_identity']);
        $city_id = $_GET['city_id'];
        $user_search_results = User::basicSearch($my_identity, $city_id);
        return $app['twig']->render('basic_search_results.html.twig', array('all_cities' => City::getAll(), 'user_search_results' => $user_search_results, 'session' => $_SESSION['user']));
    });

    $app->get('/register', function() use ($app) {
        return $app['twig']->render('register.html.twig', array('all_cities' => City::getAll(), 'all_zip_codes' => ZipCode::getAll(), 'all_identities' => Identity::getAll(), 'session' => $_SESSION['user']));
    });

    $app->get('/all_users', function() use ($app) {
        return $app['twig']->render('all_users.html.twig', array('all_users' => User::getAll(), 'session' => $_SESSION['user']));
    });

    $app->get('/user_profile/{id}', function($id) use ($app) {
        $user = User::find($id);
        $identities = $user->getIdentities();
        $seeking_genders = $user->getSeekingGenders();
        return $app['twig']->render('user_profile.html.twig', array('user' => $user, 'city_name' => $user->getCityName(), 'zip_code' => $user->getZipCode(), 'identities' => $identities, 'seeking_genders' => $seeking_genders, 'session' => $_SESSION['user']));
    });

    $app->delete('/delete_user', function() use ($app) {
        $user = User::find($_POST['user_id']);
        $user->deleteProfile();
        return $app['twig']->render('all_users.html.twig', array('all_users' => User::getAll(), 'session' => $_SESSION['user']));
    });

    $app->post('/register_new_user', function() use ($app) {

        //Add User
        $username = $_POST['username'];
        $password = $_POST['password'];
        $first_name = $_POST['first_name'];
        $status = $_POST['status'];
        $kink_friendly = $_POST['kink_friendly'];
        $birthday = $_POST['birthday'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $about_me = $_POST['about_me'];
        $interests = $_POST['interests'];
        $seeking_relationship_type = $_POST['seeking_relationship_type'];
        $last_login = date("Y-m-d");
        $city_id = $_POST['city_id'];
        $zip_code_id = $_POST['zip_code_id'];
        $new_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
        $new_user->save();

        //Add Gender
        $seeking_gender = Identity::find($_POST['seeking_gender']);
        $new_user->addSeekingGender($seeking_gender);

        //Add Identity
        $identity = Identity::find($_POST['identity']);
        $new_user->addIdentity($identity);

        return $app['twig']->render('all_users.html.twig', array('all_users' => User::getAll(), 'all_identities' => Identity::getAll(), 'session' => $_SESSION['user']));
    });

    $app->get('/sign_in', function() use ($app) {
        return $app['twig']->render('sign-in.html.twig', array('session' => $_SESSION['user']));
    });

    $app->post('/user_login', function() use ($app) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = User::signIn($username, $password);
        return $app['twig']->render('index.html.twig', array('all_identities' => Identity::getAll(), 'all_cities' => City::getAll(), 'session' => $_SESSION['user']));
    });

    $app->get('/user_sign_out', function() use ($app) {
        User::signOut();
        return $app['twig']->render('sign-in.html.twig', array('session' => $_SESSION['user']));
    });

    $app->post('/delete_all_users', function() use ($app) {
        User::deleteAll();
        return $app['twig']->render('all_users.html.twig', array('all_users' => User::getAll(), 'session' => $_SESSION['user']));
    });

    //Cities
    //*******
    //*******
    //*******

    $app->get('/all_cities', function() use ($app) {
        return $app['twig']->render('all_cities.html.twig', array('all_cities' => City::getAll(), 'session' => $_SESSION['user']));
    });

    $app->post('/add_city', function() use ($app) {
        $city_name = $_POST['city_name'];
        $state = $_POST['state'];
        $new_city = new City($city_name, $state);
        $new_city->save();
        return $app['twig']->render('all_cities.html.twig', array('all_cities' => City::getAll(), 'session' => $_SESSION['user']));
    });

    $app->post('/delete_all_cities', function() use ($app) {
        City::deleteAll();
        return $app['twig']->render('all_cities.html.twig', array('all_cities' => City::getAll(), 'session' => $_SESSION['user']));
    });

    //Zip Codes
    //*******
    //*******
    //*******

    $app->get('/all_zip_codes', function() use ($app) {
        return $app['twig']->render('all_zip_codes.html.twig', array('all_zip_codes' => ZipCode::getAll(), 'all_cities' => City::getAll(), 'session' => $_SESSION['user']));
    });

    $app->post('/add_zip_code', function() use ($app) {
        $zip_number = $_POST['zip_number'];
        $city_id = $_POST['city_id'];
        $new_zip_code = new ZipCode($zip_number, $city_id);
        $new_zip_code->save();
        return $app['twig']->render('all_zip_codes.html.twig', array('all_zip_codes' => ZipCode::getAll(), 'all_cities' => City::getAll(), 'session' => $_SESSION['user']));
    });

    $app->post('/delete_all_zip_codes', function() use ($app) {
        ZipCode::deleteAll();
        return $app['twig']->render('all_zip_codes.html.twig', array('all_zip_codes' => ZipCode::getAll()));
    });

    //Identities
    //*******
    //*******
    //*******
    $app->get('/all_identities', function() use ($app) {
        return $app['twig']->render('all_identities.html.twig', array('all_identities' => Identity::getAll(), 'session' => $_SESSION['user']));
    });

    $app->post('/add_identity', function() use ($app) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $new_identity = new Identity($name, $description);
        $new_identity->save();
        return $app['twig']->render('all_identities.html.twig', array('all_identities' => Identity::getAll(), 'session' => $_SESSION['user']));
    });

    $app->post('/delete_all_identities', function() use ($app) {
        Identity::deleteAll();
        return $app['twig']->render('all_identities.html.twig', array('all_identities' => Identity::getAll(), 'session' => $_SESSION['user']));
    });



    return $app;

 ?>
