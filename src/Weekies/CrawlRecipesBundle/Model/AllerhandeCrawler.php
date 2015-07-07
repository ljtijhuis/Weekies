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
    
    
    public function getBaseURL() {
        return "http://www.ah.nl/";
    }
    
    public function getIngredientsSelector() {
        
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


}