<?php

namespace Exam\FrontCarteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ExamFrontCarteBundle:Default:index.html.twig', array('name' => $name));
    }
    public function dateAction($param)
    {
    	$laDate = date("j m Y");
    	
    	return $this->render('ExamFrontCarteBundle:Default:date.html.twig', array('laDate' => $laDate, 'param' => $param));
    }
}
