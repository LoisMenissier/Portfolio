<?php

namespace portfolio\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('portfolioProjectBundle:Default:index.html.twig');
    }
}
