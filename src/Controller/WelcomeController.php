<?php

  namespace App\Controller;

  use Symfony\Component\HttpFoundation\Response;

  // on fait en sorte de nommer notre classe du même nom que le fichier
  class WelcomeController {
    public function welcome(): Response {
      return new Response('Welcome !');
    }
  }