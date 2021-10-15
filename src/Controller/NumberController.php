<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NumberController extends AbstractController
{
     /**
     * @Route("/lucky/number/{id}", methods={"GET","HEAD"})
     */
    public function number(int $id)
    {
        $number = $id;

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
    public function numberYaml(int $id)
    {
        $number = $id;
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}