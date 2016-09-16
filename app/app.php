<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('homepage.html.twig');
    });

    $app->post('/displayResults', function() use ($app) {
        $searchInput = $_POST['searchInput'];
        $findInput = $_POST['findInput'];
        return $app['twig']->render('display-results.html.twig');
    });

    return $app;
 ?>
