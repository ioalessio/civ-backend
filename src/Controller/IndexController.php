<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController
{
    #[Route('', name: 'landing')]
    public function __invoke(Request $request): Response
    {
        return new JsonResponse(['ok' => 1]);
    }
}
