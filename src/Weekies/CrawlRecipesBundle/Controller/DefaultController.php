<?php

namespace Weekies\CrawlRecipesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Weekies\CrawlRecipesBundle\Model\RecipesCrawler;
use Weekies\CrawlRecipesBundle\Model\AllerhandeCrawler;

class DefaultController extends Controller
{
    public function allerhandeAction()
    {
        $em = $this->getDoctrine()->getManager();

        //for now, clear out db
        $em->createQuery('DELETE WeekiesRecipesBundle:Recipe r')->execute();

        $recipes = RecipesCrawler::crawlRecipes(new AllerhandeCrawler());
        
        foreach ($recipes as $recipe) {
            $em->persist($recipe);
        }
        $em->flush();

        return $this->render('WeekiesCrawlRecipesBundle:Default:index.html.twig', array('recipes' => $recipes));
    }
}
