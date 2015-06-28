<?php

namespace Weekies\MenuGenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeekMenu
 */
class WeekMenu
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
     * @var \DateTime
     */
    private $weekStart;

    /**
     * @var \DateTime
     */
    private $weekEnd;


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
     * @return WeekMenu
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
     * Set weekStart
     *
     * @param \DateTime $weekStart
     * @return WeekMenu
     */
    public function setWeekStart($weekStart)
    {
        $this->weekStart = $weekStart;

        return $this;
    }

    /**
     * Get weekStart
     *
     * @return \DateTime 
     */
    public function getWeekStart()
    {
        return $this->weekStart;
    }

    /**
     * Set weekEnd
     *
     * @param \DateTime $weekEnd
     * @return WeekMenu
     */
    public function setWeekEnd($weekEnd)
    {
        $this->weekEnd = $weekEnd;

        return $this;
    }

    /**
     * Get weekEnd
     *
     * @return \DateTime 
     */
    public function getWeekEnd()
    {
        return $this->weekEnd;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dinners;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dinners = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add dinners
     *
     * @param \Weekies\MenuGenBundle\Entity\Dinner $dinners
     * @return WeekMenu
     */
    public function addDinner(\Weekies\MenuGenBundle\Entity\Dinner $dinners)
    {
        $this->dinners[] = $dinners;

        return $this;
    }

    /**
     * Remove dinners
     *
     * @param \Weekies\MenuGenBundle\Entity\Dinner $dinners
     */
    public function removeDinner(\Weekies\MenuGenBundle\Entity\Dinner $dinners)
    {
        $this->dinners->removeElement($dinners);
    }

    /**
     * Get dinners
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDinners()
    {
        return $this->dinners;
    }
}
