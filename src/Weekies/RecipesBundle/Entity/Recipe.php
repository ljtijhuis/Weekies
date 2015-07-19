<?php

namespace Weekies\RecipesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recipe
 */
class Recipe
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
     * @var string
     */
    private $description;


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
     * @return Recipe
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
     * Set description
     *
     * @param string $description
     * @return Recipe
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $recipeIngredients;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recipeIngredients = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add recipeIngredients
     *
     * @param \Weekies\RecipesBundle\Entity\RecipeIngredient $recipeIngredients
     * @return Recipe
     */
    public function addRecipeIngredient(\Weekies\RecipesBundle\Entity\RecipeIngredient $recipeIngredients)
    {
        $this->recipeIngredients[] = $recipeIngredients;

        return $this;
    }

    /**
     * Remove recipeIngredients
     *
     * @param \Weekies\RecipesBundle\Entity\RecipeIngredient $recipeIngredients
     */
    public function removeRecipeIngredient(\Weekies\RecipesBundle\Entity\RecipeIngredient $recipeIngredients)
    {
        $this->recipeIngredients->removeElement($recipeIngredients);
    }

    /**
     * Get recipeIngredients
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecipeIngredients()
    {
        return $this->recipeIngredients;
    }

    
    /**
     * @var integer
     */
    private $amountOfPeople;

    /**
     * @var integer
     */
    private $cookingTime;

    /**
     * @var double
     */
    private $rating;

    /**
     * @var string
     */
    private $image;


    /**
     * Set amountOfPeople
     *
     * @param integer $amountOfPeople
     * @return Recipe
     */
    public function setAmountOfPeople($amountOfPeople)
    {
        $this->amountOfPeople = $amountOfPeople;

        return $this;
    }

    /**
     * Get amountOfPeople
     *
     * @return integer 
     */
    public function getAmountOfPeople()
    {
        return $this->amountOfPeople;
    }

    /**
     * Set cookingTime
     *
     * @param integer $cookingTime
     * @return Recipe
     */
    public function setCookingTime($cookingTime)
    {
        $this->cookingTime = $cookingTime;

        return $this;
    }

    /**
     * Get cookingTime
     *
     * @return integer 
     */
    public function getCookingTime()
    {
        return $this->cookingTime;
    }

    /**
     * Set rating
     *
     * @param \float $rating
     * @return Recipe
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return \float 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Recipe
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    public function __toString() {
        $str = $this->getName() . "<br>" . $this->getDescription()."<br>";
        $str .= "#people: " . $this->getAmountOfPeople() . "<br>";
        $str .= "cooking time: " . $this->getCookingTime() . "<br>";
        $str .= "rating: " . $this->getRating() . "<br>Ingredients:<br>";

        foreach ($this->getRecipeIngredients() as $ri) {
            $str .= $ri->getQuantity() . " " .  $ri->getQuantityUnit() . " " . $ri->getIngredient()->getName() . "<br>";
        }

        $str .= "<img src=\"data:image/jpeg;base64," . base64_encode($this->getImage()) . "\" /><br><br>";

        return $str;
    }
}
