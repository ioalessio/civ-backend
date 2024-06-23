<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LoginController
{
    #[Route('/login', name: 'login')]
    public function __invoke(Request $request): Response
    {
        return new JsonResponse(['ok' => 0]);
    }
}