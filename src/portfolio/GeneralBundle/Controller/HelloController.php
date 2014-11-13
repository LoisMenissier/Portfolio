<?php

namespace portfolio\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;

class HelloController extends Controller
{
    public function indexAction()
    {
        return $this->render('portfolioGeneralBundle:Default:helloworld.html.twig');
    }
}
