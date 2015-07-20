<?php

namespace Weekies\CrawlRecipesBundle\Model;

/**
 *
 * @author Lars
 */
interface CrawlerInterface {

    function getSource();
    
    function getBaseURL();
    
    function getSeedPage();
    
    function getRecipeURLs($seedPageHTMLCrawler);
    
    function getTitleSelector();
    
    function getDescriptionSelector();

    function getAmountOfPeopleSelector();

    function getAmountOfPeopleNumber($amountStr);

    function getCookingTimeSelector();

    function getCookingTimeMinutes($timeStr);

    function getRatingSelector();

    function getRatingScaled($ratingStr);

    function getIngredients($HTMLCrawler);

    function getImageURL($HTMLCrawler);
    
}
