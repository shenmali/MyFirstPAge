<?php
namespace App\Controller;

use Doctrine\Common\Annotations\Annotation\Required;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response as Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Flex\Response as FlexResponse;

class TwigController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */

 
    public function index()
    {
       return new HttpFoundationResponse("<h1>Ali: Hello World!</h1>");
    }

    /**
     * @Route("/custom/{name?}", name="custom")
     * @param Request $request
     * @return Response
     */
    public function custom(Request $request) {
        dump($request);
        return new HttpFoundationResponse("<h1>Back</h1>");
    }
}