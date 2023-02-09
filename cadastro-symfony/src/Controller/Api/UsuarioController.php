<?php 

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/api/v1")
*/
class UsuarioController{
    /**
     * @Route("/lista", methods={"GET"}, name="lista");
    */
    public function listar(): JsonResponse{
        return new JsonResponse("Implementar lista na API", 404);
    }
    /**
     * @Route("/cadastra", methods={"POST"}, name="cadastra");
    */
    public function cadastra(): JsonResponse{
        return new JsonResponse("Implementar cadastro na API", 404);
    }
}