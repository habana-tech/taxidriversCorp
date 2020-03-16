<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DashControllerTest extends WebTestCase
{
    public function testDashIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/dash');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Hello DashController');
    }
}
