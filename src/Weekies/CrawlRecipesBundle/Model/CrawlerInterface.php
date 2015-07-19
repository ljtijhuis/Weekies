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

    function getAmountOfPeopleSelector();

    function getAmountOfPeopleNumber($amountStr);

    function getCookingTimeSelector();

    function getCookingTimeMinutes($timeStr);

    function getRatingSelector();

    function getRatingScaled($ratingStr);

    function getIngredients($HTMLCrawler);

    function getImageURL($HTMLCrawler);
    
}
