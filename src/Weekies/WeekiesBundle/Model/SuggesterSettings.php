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
    
    private $periodStart;
    private $periodEnd;
    private $dinnerEntries;
    
    public function __construct() {
        $this->periodStart = new \DateTime();
        $this->periodEnd = new \DateTime('+ 6 days');
        $this->dinnerEntries = new ArrayCollection();
    }
    
    public function getPeriodStart() {
        return $this->periodStart;
    }
    
    public function setPeriodStart($periodStart) {
        $this->periodStart = $periodStart;
    }
    
    public function getPeriodEnd() {
        return $this->periodEnd;
    }
    
    public function setPeriodEnd($periodEnd) {
        $this->periodEnd = $periodEnd;
    }
    
    public function addDinnerEntry(DinnerEntry $entry) {
        $this->dinnerEntries->add($entry);
    }
    
    public function removeDinnerEntry(DinnerEntry $entry) {
        $this->dinnerEntries->removeElement($entry);
    }

    public function getDinnerEntries() {
        return $this->dinnerEntries;
    }
}
