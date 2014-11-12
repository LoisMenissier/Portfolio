<?php

namespace portfolio\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('portfolioGeneralBundle:Default:index.html.twig');
    }
}
