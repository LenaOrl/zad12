<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CarShopController extends AbstractController
{
    #[Route('/car/shop', name: 'app_car_shop')]
    public function index(): Response
    {
        return $this->render('car_shop/index.html.twig', [
            'controller_name' => 'CarShopController',
        ]);
    }
}
