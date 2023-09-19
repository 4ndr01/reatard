<?php

namespace App\Controller;

use App\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;



class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function showForm(Request $request): Response
    {
        $form = $this->createForm(ContactFormType::class);

        return $this->render('inscription/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}