<?php
  namespace App\Controller;

  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing\Annotation\Route;

  class HelloWorldController {
    // Ceci est une annotation

    // cette annotation équivaut à 
    // hello_world:
    //     path: /hello_world
    //     controller: App\Controller\HelloWorldController::helloWord
    // dans le routes.yaml

    /**
     * @Route("/hello_world")
     */
    public function helloWorld(): Response {
      return new Response('Hello world');
    }
  }