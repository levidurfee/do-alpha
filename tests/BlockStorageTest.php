<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\DigitalOcean\Client\Client as DoClient;
use wappr\DigitalOcean\BlockStorage\BlockStorageManager;
use wappr\DigitalOcean\BlockStorage\Requests\CreateBlockStorageRequest;
use wappr\DigitalOcean\BlockStorage\Requests\DeleteBlockStorageRequest;
use wappr\DigitalOcean\BlockStorage\Requests\RetrieveBlockStorageRequest;

class BlockStorageTest extends PHPUnit_Framework_TestCase
{
    protected $client;

    public function testListAllVolumes()
    {
        $mockResponse = '{
          "volumes": [
            {
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
          ],
          "links": {
          },
          "meta": {
            "total": 1
          }
        }';

        $mock = new MockHandler([
            new Response(200, [], $mockResponse),
            new Response(404, [], $mockResponse),
        ]);

        $handler = HandlerStack::create($mock);

        $this->client = new DoClient();
        $this->client->setHttpClient(
            new Client(['handler' => $handler])
        );

        $blockStorage = new BlockStorageManager;
        $response = $blockStorage->getAll($this->client);
        $this->assertEquals($response->getStatusCode(), 200);
        $contents = json_decode($response->getBody()->getContents());
        $this->assertEquals($contents->meta->total, 1);

        $response = $blockStorage->getAll($this->client);
        $this->assertEquals($response->getStatusCode(), 404);
    }

    public function testCreateVolume()
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

        $this->client = new DoClient();
        $this->client->setHttpClient(
            new Client(['handler' => $handler])
        );

        $blockStorage = new BlockStorageManager;
        $createBlockStorage = new CreateBlockStorageRequest('10', 'test', 'description', 'nyc3');
        $response = $blockStorage->create($this->client, $createBlockStorage);
        $json = json_decode($response->getBody()->getContents());
        $this->assertEquals($json->volume->id, '506f78a4-e098-11e5-ad9f-000f53306ae1');
        $this->assertEquals($response->getStatusCode(), 200);
    }

    public function testRetrieveBlockStorage()
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

        $this->client = new DoClient();
        $this->client->setHttpClient(
            new Client(['handler' => $handler])
        );

        $blockStorage = new BlockStorageManager;
        $retrieveBlockStorage = new RetrieveBlockStorageRequest('506f78a4-e098-11e5-ad9f-000f53306ae1');
        $response = $blockStorage->retrieve($this->client, $retrieveBlockStorage);

        $json = json_decode($response->getBody()->getContents());
        $this->assertEquals($json->volume->id, '506f78a4-e098-11e5-ad9f-000f53306ae1');
        $this->assertEquals($response->getStatusCode(), 200);
    }

    public function testDeleteBlockStorage()
    {
        $mockResponse = '';

        $mock = new MockHandler([
            new Response(204, [], $mockResponse),
        ]);

        $handler = HandlerStack::create($mock);

        $this->client = new DoClient();
        $this->client->setHttpClient(
            new Client(['handler' => $handler])
        );

        $blockStorage = new BlockStorageManager;
        $deleteBlockStorage = new DeleteBlockStorageRequest('506f78a4-e098-11e5-ad9f-000f53306ae1');
        $response = $blockStorage->delete($this->client, $deleteBlockStorage);

        $this->assertEquals($response->getStatusCode(), 204);
    }
}
