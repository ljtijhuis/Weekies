<?php

namespace Weekies\MenuGenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dinner
 */
class Dinner
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $numberOfPersons;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Dinner
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set numberOfPersons
     *
     * @param integer $numberOfPersons
     * @return Dinner
     */
    public function setNumberOfPersons($numberOfPersons)
    {
        $this->numberOfPersons = $numberOfPersons;

        return $this;
    }

    /**
     * Get numberOfPersons
     *
     * @return integer 
     */
    public function getNumberOfPersons()
    {
        return $this->numberOfPersons;
    }
    /**
     * @var \Weekies\MenuGenBundle\Entity\WeekMenu
     */
    private $weekMenu;


    /**
     * Set weekMenu
     *
     * @param \Weekies\MenuGenBundle\Entity\WeekMenu $weekMenu
     * @return Dinner
     */
    public function setWeekMenu(\Weekies\MenuGenBundle\Entity\WeekMenu $weekMenu = null)
    {
        $this->weekMenu = $weekMenu;

        return $this;
    }

    /**
     * Get weekMenu
     *
     * @return \Weekies\MenuGenBundle\Entity\WeekMenu 
     */
    public function getWeekMenu()
    {
        return $this->weekMenu;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dinnerRecipe;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dinnerRecipe = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add dinnerRecipe
     *
     * @param \Weekies\MenuGenBundle\Entity\DinnerHasRecipe $dinnerRecipe
     * @return Dinner
     */
    public function addDinnerRecipe(\Weekies\MenuGenBundle\Entity\DinnerHasRecipe $dinnerRecipe)
    {
        $this->dinnerRecipe[] = $dinnerRecipe;

        return $this;
    }

    /**
     * Remove dinnerRecipe
     *
     * @param \Weekies\MenuGenBundle\Entity\DinnerHasRecipe $dinnerRecipe
     */
    public function removeDinnerRecipe(\Weekies\MenuGenBundle\Entity\DinnerHasRecipe $dinnerRecipe)
    {
        $this->dinnerRecipe->removeElement($dinnerRecipe);
    }

    /**
     * Get dinnerRecipe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDinnerRecipe()
    {
        return $this->dinnerRecipe;
    }
}
