<?php 

namespace App\Controller\Api;

use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/api/v1")
*/
class UsuarioController extends AbstractController{
    /**
     * @Route("/lista", methods={"GET"}, name="lista");
    */
    public function listar(): JsonResponse{

        $doctrine = $this->getDoctrine()->getRepository(Usuario::class);        

        return new JsonResponse($doctrine->pegarTodos(), 404);
    }
    /**
     * @Route("/cadastra", methods={"POST"}, name="cadastra");
    */
    public function cadastra(Request $request): Response{
        $data = $request->request->all();

        $usuario = new Usuario;
        $usuario->setNome($data['nome']);
        $usuario->setEmail($data['email']);

        dump($usuario);

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($usuario);        
        $doctrine->flush();        

        // if($usuario->getId()){
        if($doctrine->contains($usuario)){
            return new Response("ok", 200);
        }else{
            return new Response("error", 404);
        }

        return new JsonResponse(["Implementar cadastro na API"], 404);
    }
}