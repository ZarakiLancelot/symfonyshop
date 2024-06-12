<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipController extends AbstractController
{
    #[Route('/api/v1/starships')]
    public function getCollection(StarshipRepository $starshipRepository): Response
    {
        // dd($logger);
        // dd($starshipRepository);
        $starships = $starshipRepository->findAll();

        return $this->json($starships);
    }
}
