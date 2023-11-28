<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RoutingTest extends WebTestCase
{
    public function providerUriWithStatusCode():array
    {
        return [
            ['/hello/Riri',200],
            ['/hello',200],
            ['/hello/clement',200],
        ];
    }

    /**
     * @dataProvider providerUriWithStatusCode
     */
    public function testSomething2(string $uri, int $expectedStatusCode)
    {
        $client = static::createClient();
        $client->request('GET', $uri);

        $this->assertResponseStatusCodeSame($expectedStatusCode);
        //$this->assertSelectorTextContains($uri, 'Riri');
    }
}
