<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NameController extends AbstractController
{  /**
    * @Route("/name/{name?}", name="name")
    * @param Request $request
    * @return Response
    */
    public function name(){
        $name = 'Ali';
        return $this->render('name/name.html.twig', [
            'name' => $name,
        ]); 
    }

   //twig islemini ayri bir PHP dosyasinda yapmaya calistim
}