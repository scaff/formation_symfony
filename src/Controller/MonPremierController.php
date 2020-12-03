<?php
// définition du namespace dans lequel on va définir notre classe MonPremierController
// MonPremierController sera accessible en suivant ce chemin : App\Controller\MonPremierController
namespace App\Controller;

// On importe ici les classe dont on va avoir besoin
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MonPremierController extends AbstractController
{
    // définition de notre méthode qui va retourner un objet de classe Response
    // cette méthode là sera un controller et sera appelé comme le précise le fichier routes.yaml
    // lorsqu'on voudra accéder à la route /lucky/number


    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        $number = random_int(0, 100);
        $somme = $number + 10;

        // l'objet Response va dans cet exemple nous servir de vue à rendre
        // return new Response(
        //     '<html><body>Lucky number: '.$number.' '.$somme.'</body></html>'
        // );

        // la méthode render vient de AbstractController
        // elle va chercher les templates à la racines du dossier /templates
        return $this->render('lucky/number.html.twig', [
          'number' => $number,
          'somme' => $somme
        ]);
    }

    /**
     * @Route("/nombre_choisi/{nombreChoisi}")
     */
    public function nombreChoisi($nombreChoisi) {
      // appel à la base de donnée pour trouver l'élément dont l'id est $nombreChoisi

      return $this->render('nombreChoisi.html.twig', [
        'nombre' => $nombreChoisi
      ]);
    }
}
