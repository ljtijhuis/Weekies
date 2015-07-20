<?php

namespace Weekies\CrawlRecipesBundle\Model;

use Weekies\CrawlRecipesBundle\Model\CrawlerInterface;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Description of AllerhandeCrawler
 *
 * @author Lars
 */
class AllerhandeCrawler implements CrawlerInterface {
    
    public function getSource() {
        return "Allerhande";
    }
    
    public function getBaseURL() {
        return "http://www.ah.nl/";
    }
    
    public function getRecipeURLs($seedPageHTMLCrawler) {

        $result = array();
        
        $urls = $seedPageHTMLCrawler->filter("section.recipe")->each(function (Crawler $node, $i) {
            return $node->filter("header h4 a")->attr('href');
        });
        
        foreach ($urls as $url) {
            $result[] = $this->getBaseURL() . $url;
        }
        
        return $result;        
    }

    public function getSeedPage() {
        return "http://www.ah.nl/allerhande/recepten/R-L1383828514890/vlees-op-de-bbq?Nrpp=170";
    }

    public function getTitleSelector() {
        return "article > section.header > header > h1";
    }
    
    public function getDescriptionSelector(){  
        return "article > section.header > header > h2";
    }

    public function getAmountOfPeopleSelector() {
        return "article > section.teaser > ul > li > div > section > ul.short > li:nth-child(2) > span";
    }


    public function getAmountOfPeopleNumber($amountStr) {
        return explode (' ', $amountStr)[0];
    }

    public function getCookingTimeSelector(){
        return "article > section.teaser > ul > li > div > section > ul.short > li.cooking-time > ul > li";
    }

    public function getCookingTimeMinutes($timeStr){
        //TODO: This is preparation time only, multiple timings are available per recipe (oven for example)
        return explode (' ', $timeStr)[0];
    }

    public function getRatingSelector(){
        return "article > section.content > div.content-wrapper > div > div > span:nth-child(1)";
    }

    public function getRatingScaled($ratingStr){
        return floatval($ratingStr);
    }

    public function getIngredients($HTMLCrawler){
        $ingredientsSelector = "article > section.content > div.content-wrapper > section.js-ingredients.ingredients > ul";
        return array();
    }

    public function getImageURL($HTMLCrawler){
        return $HTMLCrawler->filter("article > section.teaser > ul > li")->attr("data-default-src");
    }

}
