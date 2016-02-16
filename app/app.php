<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/AnagramGenerator.php";

  session_start();

  $app["debug"] = true;

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"));

  $app->get("/", function() use ($app){
     return $app['twig']->render('index.html.twig');
  });

  $app->get("/", function() use($app) {
       $my_Anagram = new AnagramGenerator;
       $initialWord = $my_Anagram->matchOutput($_GET['word'], $_GET['possible']);
       var_dump($initialWord);
       return $app['twig']->render('index.html.twig', array('result' => array("a", "b")));
   });

  return $app;

?>
