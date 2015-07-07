<?php

namespace Weekies\CrawlRecipesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Weekies\CrawlRecipesBundle\Model\RecipesCrawler;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $html = file_get_contents('');

        RecipesCrawler::parseRecipe($html);

        return $this->render('WeekiesCrawlRecipesBundle:Default:index.html.twig', array('name' => $name));
    }
}
