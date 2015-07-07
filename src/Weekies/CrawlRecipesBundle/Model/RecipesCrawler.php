<?php

namespace Weekies\CrawlRecipesBundle\Model;

use Symfony\Component\DomCrawler\Crawler;
use Weekies\RecipesBundle\Entity\Recipe;
use Weekies\RecipesBundle\Entity\Ingredient;

/**
 *
 * @author Lars
 */
class RecipesCrawler {

    public static function crawlRecipes(CrawlerInterface $crawler) {
        //get recipe pages
        $seedPage = file_get_contents($crawler->getSeedPage());

        $HTMLCrawler = new Crawler($seedPage);
        
        $debugLimit = 10;
        $count = 0;
        foreach ($crawler->getRecipeURLs($HTMLCrawler) as $recipePageURL) {
            $recipe = static::parseRecipe(file_get_contents($recipePageURL), $crawler);
            
            if ($count > $debugLimit) {
                break;
            }
            $count++;

            //TODO store recipe? build in a check if it already exists?
        }

    }

    public static function parseRecipe($html, CrawlerInterface $crawler) {

        $HTMLCrawler = new Crawler($html);

        //title
        $title = $HTMLCrawler->filter($crawler->getTitleSelector())->text();

        echo $title . "<br>" ;
        //description
        $description = $HTMLCrawler->filter($crawler->getDescriptionSelector())->text();
        
        echo $description . "<br><br>";

        //amount of people

        //cooking time

        //rating

        //ingredients
        //$ingredients = $HTMLCrawler->filter($crawler->getIngredientsSelector());
        
        //instructions

        //images

    }

}
