<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Weekies\WeekiesBundle\Model;

/**
 * Description of DinnerEntry
 *
 * @author Lars
 */
class DinnerEntry {
    private $date;
    private $amountOfPeople;
    
    public function __construct() {
        $this->date = new \DateTime();
    }
    
    public function getDate(){
        return $this->date;
    }
    
    public function setDate($date) {
        $this->date = $date;
    }
    
    public function getAmountOfPeople(){
        return $this->amountOfPeople;
    }
    
    public function setAmountOfPeople($amountOfPeople) {
        $this->amountOfPeople = $amountOfPeople;
    }
}
