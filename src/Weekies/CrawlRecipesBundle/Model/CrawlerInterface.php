<?php

namespace Weekies\CrawlRecipesBundle\Model;

/**
 *
 * @author Lars
 */
interface CrawlerInterface {
    
    function getBaseURL();
    
    function getSeedPage();
    
    function getRecipeURLs($seedPageHTMLCrawler);
    
    function getTitleSelector();
    
    function getDescriptionSelector();
    
    function getIngredientsSelector();
    
}
