<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\DigitalOcean\Client as doClient;
use wappr\DigitalOcean\doFactory;

class doFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Action does not exist.
     */
    public function testInvalidArgumentException()
    {
        doFactory::create('FakeAction', ['test'], new doClient());
    }

    /**
     * @expectedException PHPUnit_Framework_Error_Warning
     */
    public function testInvalidParams()
    {
        doFactory::create('Droplets', ['test']);
    }

    public function testCreate()
    {
        $mockResponse = '{
          "volume": {
            "id": "506f78a4-e098-11e5-ad9f-000f53306ae1",
            "region": {
              "name": "New York 1",
              "slug": "nyc1",
              "sizes": [
                "512mb",
                "1gb",
                "2gb",
                "4gb",
                "8gb",
                "16gb",
                "32gb",
                "48gb",
                "64gb"
              ],
              "features": [
                "private_networking",
                "backups",
                "ipv6",
                "metadata"
              ],
              "available": true
            },
            "droplet_ids": [
        
            ],
            "name": "example",
            "description": "Block store for examples",
            "size_gigabytes": 10,
            "created_at": "2016-03-02T17:00:49Z"
          }
        }';

        $mock = new MockHandler([
            new Response(200, [], $mockResponse),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new doClient();
        $client->setHttpClient(
            new Client(['handler' => $handler])
        );

        $response = doFactory::create('BlockStorage', [
            10, 'testing', 'description', 'nyc1',
        ], $client);

        $json = doFactory::json($response);

        $this->assertEquals($json->volume->id, '506f78a4-e098-11e5-ad9f-000f53306ae1');
        $this->assertEquals($response->getStatusCode(), 200);
    }

    public function testDelete()
    {
        $mock = new MockHandler([
            new Response(204, [], null),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new doClient();
        $client->setHttpClient(
            new Client(['handler' => $handler])
        );

        $response = doFactory::delete('BlockStorage', ['506f78a4-e098-11e5-ad9f-000f53306ae1'], $client);

        $this->assertEquals($response->getStatusCode(), 204);
    }
}
