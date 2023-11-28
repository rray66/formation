<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/hello/{name}', name: 'app_home')]
    public function index($name): Response
    {
        //echo $name;
        //dd($name);
        return new Response($name);
        //var_dump($name);
        //dump($name);
        //die;
        //return $this->render('home/index.html.twig', [
        //    'controller_name' => $name
        //]);
    }
}
