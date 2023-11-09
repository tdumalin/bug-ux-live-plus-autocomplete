<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Form\Type\AdType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {
        $ad = new Ad();
        $form = $this->createForm(AdType::class, $ad);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            dd($ad->getType());
        }

        return $this->render('home/index.html.twig', [
            'form' => $form
        ]);
    }
}
