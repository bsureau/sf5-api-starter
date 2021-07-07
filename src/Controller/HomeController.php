<?php

namespace App\Controller;

use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homecontroller_index", methods={"GET"})
     * @OA\Get(
     *     tags={"Home"},
     *     summary="A brief summary about the homepage.",
     *     description="A more descriptive text about the homepage.",
     *     responses={
     *          @OA\Response(response = 200, description ="the homepage in case of success."),
     *          @OA\Response(response = 401, description ="you're not allowed to go here."),
     *     }
     * )
     */
    public function index(Request $request)
    {
        return $this->json('OK', Response::HTTP_OK);
    }

}