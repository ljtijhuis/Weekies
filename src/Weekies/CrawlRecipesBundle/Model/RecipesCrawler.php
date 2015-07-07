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

        foreach ($crawler->getRecipeURLs($seedPage) as $recipePageURL) {
            $recipe = parseRecipe(file_get_contents($recipePageURL), $crawler);

            //TODO store recipe? build in a check if it already exists?
        }

    }

    public static function parseRecipe($html, CrawlerInterface $crawler) {

        $HTMLCrawler = new Crawler($html);

        //title

        //description

        //amount of people

        //cooking time


        //ingredients
        $ingredients = $HTMLCrawler->filter($crawler->getIngredientsSelector);
        var_dump($ingredients->html());

        //instructions

        //images

    }

}
