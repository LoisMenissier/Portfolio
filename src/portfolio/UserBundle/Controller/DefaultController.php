<?php

namespace Portfolio\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortfolioUserBundle:Default:index.html.twig');
    }
}
