<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('homepage.html.twig');
    });

    $app->post('/displayResult', function() use ($app) {
        $searchInput = $_POST['searchInput'];
        $findInput = $_POST['findInput'];
        $repeatCounter = new RepeatCounter;
        $wordInstances = $repeatCounter->countRepeats($searchInput, $findInput);
        return $app['twig']->render('display-results.html.twig', array('wordInstances' => $wordInstances, 'searchInput' => $searchInput, 'findInput' => $findInput));
    });

    return $app;
 ?>
