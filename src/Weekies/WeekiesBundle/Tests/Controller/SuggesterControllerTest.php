<?php

namespace Weekies\WeekiesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SuggesterControllerTest extends WebTestCase
{
    public function testSetup()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/setup');
    }

    public function testSuggest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/suggest');
    }

    public function testShoppinglist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/shoppingList');
    }

    public function testStock()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/stock');
    }

}
