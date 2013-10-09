<?php

namespace Muni\Arq\ArqBundle\Controller;

use Muni\Arq\ArqBundle\Entity\Calle;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
    
    public function principalAction(){
       return $this->render('ArqBundle:Default:index.html.twig');
    }
    
  
 
public function createAction()
{
    

    $calle = new Calle();
    $calle->setNombre('San Martin');
    $calle->setNumeroinicio('200');
    $calle->setNumeroFin('300');
 
    $em = $this->getDoctrine()->getManager();
    $em->persist($calle);
    $em->flush(); 
   
    return new Response('Created product id '.$calle->getId());

    
}

}
