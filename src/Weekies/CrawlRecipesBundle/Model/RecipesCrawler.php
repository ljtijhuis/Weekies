<?php

namespace Weekies\CrawlRecipesBundle\Model;

use Symfony\Component\DomCrawler\Crawler;
use Weekies\RecipesBundle\Entity\Recipe;
use Weekies\RecipesBundle\Entity\RecipeIngredient;
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

        $recipes = array();
        foreach ($crawler->getRecipeURLs($HTMLCrawler) as $recipePageURL) {
            $recipes[] = static::parseRecipe(file_get_contents($recipePageURL), $crawler);
            
            if ($count > $debugLimit) {
                break;
            }
            $count++;

            //TODO store recipe? build in a check if it already exists?
        }

        return $recipes;
    }

    public static function parseRecipe($html, CrawlerInterface $crawler) {

        $HTMLCrawler = new Crawler($html);

        //title
        $title = static::getTextOrDefault($HTMLCrawler, $crawler->getTitleSelector());

        //description
        $description = static::getTextOrDefault($HTMLCrawler, $crawler->getDescriptionSelector());

        //amount of people (int)
        $amountOfPeople = $crawler->getAmountOfPeopleNumber(static::getTextOrDefault($HTMLCrawler, $crawler->getAmountOfPeopleSelector(), "-1"));

        //cooking time (minutes)
        $cookingTime = $crawler->getCookingTimeMinutes(static::getTextOrDefault($HTMLCrawler, $crawler->getCookingTimeSelector(), "-1"));

        //rating (1-5)
        $rating = $crawler->getRatingScaled(static::getTextOrDefault($HTMLCrawler, $crawler->getRatingSelector(), "-1"));

        //ingredients (ingredient => (amount, unit))
        $ingredients = $crawler->getIngredients($HTMLCrawler);
    
        //images
        $imageURL = $crawler->getImageURL($HTMLCrawler);

        $image = file_get_contents($imageURL);

        //for later: cooking instructions?


        //create object and return
        $recipe = new Recipe();
        $recipe->setName($title);
        $recipe->setDescription($description);
        $recipe->setAmountOfPeople($amountOfPeople);
        $recipe->setCookingTime($cookingTime);
        $recipe->setRating($rating);
        $recipe->setImage($image);

        foreach ($ingredients as $ingredient => $amountUnit) {
            $ing = new Ingredient();
            $ing->setName($ingredient);
            $recipeIngredient = new RecipeIngredient();
            $recipeIngredient->setQuantity($amountUnit[0]);
            $recipeIngredient->setQuantityUnit($amountUnit[1]);
            $recipeIngredient->setIngredient($ing);
            $recipe->addRecipeIngredient($recipeIngredient);
        }

        return $recipe;
    }

    private static function getTextOrDefault(Crawler $HTMLCrawler, $selector, $default = '') {

        $filtered = $HTMLCrawler->filter($selector);

        return !count($filtered) ? $default : $filtered->text();

    }

}
