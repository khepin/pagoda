<?php

namespace Khepin\PagodaTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Route("/hello/")
     * @Template()
     */
    public function indexAction($name = 'Bob')
    {
        return array('name' => $name);
    }
    
    /**
     * @Route("/")
     * @return \Symfony\Component\HttpFoundation\Response 
     */
    public function realindexAction(){
        return new \Symfony\Component\HttpFoundation\Response('Hi there!');
    }
}
