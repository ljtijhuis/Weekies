<?php

namespace Weekies\MenuGenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WeekiesMenuGenBundle:Default:index.html.twig', array('name' => $name));
    }
}
