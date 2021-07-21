<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\ProductRepository;

class ProductController extends AbstractController{

       /**
     * @Route("/")
     */
    public function homepage(ProductRepository $repo): Response {
        $bikes = $repo -> findBy([]);
        
        return $this->render("homepage.html.twig", [
            'bikes' => $bikes
        ]);
    }
}