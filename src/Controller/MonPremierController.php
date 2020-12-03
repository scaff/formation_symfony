<?php
// définition du namespace dans lequel on va définir notre classe MonPremierController
// MonPremierController sera accessible en suivant ce chemin : App\Controller\MonPremierController
namespace App\Controller;

// On importe ici les classe dont on va avoir besoin
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonPremierController
{
    // définition de notre méthode qui va retourner un objet de classe Response
    // cette méthode là sera un controller et sera appelé comme le précise le fichier routes.yaml
    // lorsqu'on voudra accéder à la route /lucky/number


    /**
     * @Route("/lucky/number")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);
        $somme = $number + 10;

        // l'objet Response va dans cet exemple nous servir de vue à rendre
        return new Response(
            '<html><body>Lucky number: '.$number.' '.$somme.'</body></html>'
        );
    }
}
