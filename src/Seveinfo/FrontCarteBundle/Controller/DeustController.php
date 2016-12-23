<?php

namespace Seveinfo\FrontCarteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeustController extends Controller
{
    public function appelAction($arg)
    {
        $laDate = date("j F, Y");

        return $this->render('SeveinfoFrontCarteBundle:Deust:appel.html.twig', array('laDate' => $laDate,'arg' =>$arg));
    }
}
