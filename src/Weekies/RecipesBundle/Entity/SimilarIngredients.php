<?php

namespace Weekies\RecipesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SimilarIngredients
 */
class SimilarIngredients
{
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
