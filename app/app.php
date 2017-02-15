<?php
    date_default_timezone_set('America/Los_Angeles');

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('play-game.html.twig');
    });

    $app->post("/game-picks", function() use ($app) {
        $newGame = new RockPaperScissors;
        $results = $newGame->playGame($_POST['player1'], $_POST['player2']);
        return $app['twig']->render('results.html.twig', array('game_results' => $results));
    });



    return $app;

 ?>
