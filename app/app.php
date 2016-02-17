<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Palindrome.php";

    session_start();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("home.html.twig");
    });

    $app->get("/results", function() use ($app){
        $new_palindrome = new Palindrome($_GET['input_word']);
        $new_test = $new_palindrome->checkPalindrome($_GET['input_word']);
        return $app['twig']->render("results.html.twig", array('new_result' => $new_test));
    });

    return $app;
 ?>
