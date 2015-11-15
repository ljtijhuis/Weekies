<?php 

namespace Weekies\RecipesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use \Weekies\RecipesBundle\Entity\Recipe;
use \Weekies\RecipesBundle\Entity\Ingredient;
use \Weekies\RecipesBundle\Entity\RecipeIngredient;

class LoadDummyRecipes implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $recipe = new Recipe();
        $recipe->setName('Spaghetti Bolognese');
        $recipe->setDescription('Spaghetti van Ome Lars!');
        $recipe->setAmountOfPeople(4);
        $recipe->setCookingTime(30);
        $recipe->setRating(5);
        
        $manager->persist($recipe);
        $manager->flush();
    }
}