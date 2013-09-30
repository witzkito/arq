<?php

namespace Muni\Arq\ArqBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ArqBundle:Default:index.html.twig', array('name' => $name));
    }
}
