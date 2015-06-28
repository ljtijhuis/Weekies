<?php

namespace Weekies\MenuGenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DinnerHasRecipe
 */
class DinnerHasRecipe
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $accepted;


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
     * Set accepted
     *
     * @param boolean $accepted
     * @return DinnerHasRecipe
     */
    public function setAccepted($accepted)
    {
        $this->accepted = $accepted;

        return $this;
    }

    /**
     * Get accepted
     *
     * @return boolean 
     */
    public function getAccepted()
    {
        return $this->accepted;
    }
    /**
     * @var \Weekies\MenuGenBundle\Entity\Dinner
     */
    private $dinner;

    /**
     * @var \Weekies\RecipesBundle\Entity\Recipe
     */
    private $recipe;


    /**
     * Set dinner
     *
     * @param \Weekies\MenuGenBundle\Entity\Dinner $dinner
     * @return DinnerHasRecipe
     */
    public function setDinner(\Weekies\MenuGenBundle\Entity\Dinner $dinner = null)
    {
        $this->dinner = $dinner;

        return $this;
    }

    /**
     * Get dinner
     *
     * @return \Weekies\MenuGenBundle\Entity\Dinner 
     */
    public function getDinner()
    {
        return $this->dinner;
    }

    /**
     * Set recipe
     *
     * @param \Weekies\RecipesBundle\Entity\Recipe $recipe
     * @return DinnerHasRecipe
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
}
