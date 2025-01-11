<?php

namespace App\Controller\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class General extends AbstractController
{
    #[Route(methods: [Request::METHOD_GET])]
    public function index(Request $request)
    {
        if (!$request->isMethod(Request::METHOD_GET)) {
            return new Response(
                json_encode(['error' => 'Method not allowed']),
                Response::HTTP_METHOD_NOT_ALLOWED,
                ['Content-Type' => 'application/json'],
            );
        }

        return new Response(
            json_encode(['message' => 'Welcome to the API']),
            Response::HTTP_OK,
            ['Content-Type', 'application/json']
        );
    }
}
