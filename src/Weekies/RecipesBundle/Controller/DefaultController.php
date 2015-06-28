<?php

namespace Weekies\RecipesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WeekiesRecipesBundle:Default:index.html.twig', array('name' => $name));
    }
}
