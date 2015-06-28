<?php

namespace Weekies\RecipesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecipeIngredient
 */
class RecipeIngredient
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $quantity;

    /**
     * @var string
     */
    private $quantityUnit;


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
     * Set quantity
     *
     * @param string $quantity
     * @return RecipeIngredient
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set quantityUnit
     *
     * @param string $quantityUnit
     * @return RecipeIngredient
     */
    public function setQuantityUnit($quantityUnit)
    {
        $this->quantityUnit = $quantityUnit;

        return $this;
    }

    /**
     * Get quantityUnit
     *
     * @return string 
     */
    public function getQuantityUnit()
    {
        return $this->quantityUnit;
    }
    /**
     * @var \Weekies\RecipesBundle\Entity\Recipe
     */
    private $recipe;

    /**
     * @var \Weekies\RecipesBundle\Entity\Ingredient
     */
    private $ingredient;


    /**
     * Set recipe
     *
     * @param \Weekies\RecipesBundle\Entity\Recipe $recipe
     * @return RecipeIngredient
     */
    public function setRecipe(\Weekies\RecipesBundle\Entity\Recipe $recipe = null)
    {
        $this->recipe = $recipe;

        return $this;
    }

    /**
     * Get recipe
     *
     * @return \Weekies\RecipesBundle\Entity\Recipe 
     */
    public function getRecipe()
    {
        return $this->recipe;
    }

    /**
     * Set ingredient
     *
     * @param \Weekies\RecipesBundle\Entity\Ingredient $ingredient
     * @return RecipeIngredient
     */
    public function setIngredient(\Weekies\RecipesBundle\Entity\Ingredient $ingredient = null)
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    /**
     * Get ingredient
     *
     * @return \Weekies\RecipesBundle\Entity\Ingredient 
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }
}
