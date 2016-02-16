<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/AnagramGenerator.php";

  $app = new Silex\Application();

  $app["debug"] = true; //make sure this is AFTER APP STARTS

  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"));

  $app->get("/", function() use ($app){
     return $app['twig']->render('index.html.twig', array('result' => NULL)); //upon load the array result does not yet exist to display so we are creating a null result as a place holder.
  });

  $app->get("/result", function() use($app) { //cannot use get() on the same location/thing twice
       $my_Anagram = new AnagramGenerator;
       $possibleWords = explode(', ', $_GET['possible']);
       $initialWord = $my_Anagram->matchOutput($_GET['word'], $possibleWords);
       return $app['twig']->render('index.html.twig', array('result' => $initialWord));
   });

  return $app;

?>
