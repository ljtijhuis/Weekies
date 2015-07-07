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
}
