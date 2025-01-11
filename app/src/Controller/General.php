<?php

namespace App\Controller;

use App\Utils\GetRoutes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class General extends AbstractController
{
    #[Route(name: 'home')]
    public function home(): Response
    {
        include GetRoutes::getPath();
        return new Response(null, Response::HTTP_OK);
    }
}
