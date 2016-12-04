<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\DigitalOcean\Client as DoClient;
use wappr\DigitalOcean\Actions\BlockStorage;
use wappr\DigitalOcean\Models\Create\CreateBlockStorageModel;
use wappr\DigitalOcean\Models\Delete\DeleteBlockStorageModel;
use wappr\DigitalOcean\Models\Retrieve\RetrieveBlockStorageModel;

class BlockStorageTest extends PHPUnit_Framework_TestCase
{
    protected $client;

    /**
     * @expectedException GuzzleHttp\Exception\ClientException
     */
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

        $blockStorage = new BlockStorage;
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

        $blockStorage = new BlockStorage;
        $createBlockStorage = new CreateBlockStorageModel('10', 'test', 'description', 'nyc3');
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

        $blockStorage = new BlockStorage;
        $retrieveBlockStorage = new RetrieveBlockStorageModel('506f78a4-e098-11e5-ad9f-000f53306ae1');
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

        $blockStorage = new BlockStorage;
        $deleteBlockStorage = new DeleteBlockStorageModel('506f78a4-e098-11e5-ad9f-000f53306ae1');
        $response = $blockStorage->delete($this->client, $deleteBlockStorage);

        $this->assertEquals($response->getStatusCode(), 204);
    }
}