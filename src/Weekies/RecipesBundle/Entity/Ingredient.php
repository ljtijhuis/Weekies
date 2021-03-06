<?php

namespace Weekies\RecipesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredient
 */
class Ingredient
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Ingredient
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ingredientRecipes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ingredientRecipes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->similarIngredients = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ingredientRecipes
     *
     * @param \Weekies\RecipesBundle\Entity\RecipeIngredient $ingredientRecipes
     * @return Ingredient
     */
    public function addIngredientRecipe(\Weekies\RecipesBundle\Entity\RecipeIngredient $ingredientRecipes)
    {
        $this->ingredientRecipes[] = $ingredientRecipes;

        return $this;
    }

    /**
     * Remove ingredientRecipes
     *
     * @param \Weekies\RecipesBundle\Entity\RecipeIngredient $ingredientRecipes
     */
    public function removeIngredientRecipe(\Weekies\RecipesBundle\Entity\RecipeIngredient $ingredientRecipes)
    {
        $this->ingredientRecipes->removeElement($ingredientRecipes);
    }

    /**
     * Get ingredientRecipes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIngredientRecipes()
    {
        return $this->ingredientRecipes;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $similarIngredients;


    /**
     * Add similarIngredients
     *
     * @param \Weekies\RecipesBundle\Entity\Ingredient $similarIngredients
     * @return Ingredient
     */
    public function addSimilarIngredient(\Weekies\RecipesBundle\Entity\Ingredient $similarIngredients)
    {
        $this->similarIngredients[] = $similarIngredients;

        return $this;
    }

    /**
     * Remove similarIngredients
     *
     * @param \Weekies\RecipesBundle\Entity\Ingredient $similarIngredients
     */
    public function removeSimilarIngredient(\Weekies\RecipesBundle\Entity\Ingredient $similarIngredients)
    {
        $this->similarIngredients->removeElement($similarIngredients);
    }

    /**
     * Get similarIngredients
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSimilarIngredients()
    {
        return $this->similarIngredients;
    }
}
