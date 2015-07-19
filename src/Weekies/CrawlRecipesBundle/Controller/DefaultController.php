<?php

namespace Weekies\CrawlRecipesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Weekies\CrawlRecipesBundle\Model\RecipesCrawler;
use Weekies\CrawlRecipesBundle\Model\AllerhandeCrawler;

class DefaultController extends Controller
{
    public function allerhandeAction()
    {

        $recipes = RecipesCrawler::crawlRecipes(new AllerhandeCrawler());
        
        $em = $this->getDoctrine()->getManager();

        foreach ($recipes as $recipe) {
            $em->persist($recipe);
        }
        $em->flush();

        return $this->render('WeekiesCrawlRecipesBundle:Default:index.html.twig', array('recipes' => $recipes));
    }
}
