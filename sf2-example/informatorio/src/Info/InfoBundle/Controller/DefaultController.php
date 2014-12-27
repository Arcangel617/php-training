<?php

namespace Info\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
//    info_info_homepage:
//    path:     /hello/{name}
//    defaults: { _controller: InfoInfoBundle:Default:index }
    
    public function indexAction($name)
    {
        return $this->render('InfoInfoBundle:Default:index.html.twig', array('name' => $name));
    }
    
    /**
     * @Route("/example",name="_info_example")
     */
    
    public function exampleAction()
    {
        return array('arcangel');
    }
}
