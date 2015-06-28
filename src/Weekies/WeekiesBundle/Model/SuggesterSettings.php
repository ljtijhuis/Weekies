<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Weekies\WeekiesBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Description of SuggesterSettings
 *
 * @author Lars
 */
class SuggesterSettings {
    //put your code here
    private $dinnerEntries;
    
    public function __construct() {
        $dinnerEntries = new ArrayCollection();
    }
    
    public function addDinnerEntry(DinnerEntry $entry) {
        $dinnerEntries->add($entry);
    }
    
    public function getDinnerEntries() {
        return $this->dinnerEntries;
    }
}