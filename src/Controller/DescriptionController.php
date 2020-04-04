<?php

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DescriptionController extends AbstractController
{
    /**
     * @Route("/description")
     */
    public function description()
    {
        return $this->render('description.html.twig');
    }
}
