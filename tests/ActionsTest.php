<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\DigitalOcean\Actions\Actions;
use wappr\DigitalOcean\Client\Client as DoClient;
use wappr\DigitalOcean\Actions\Requests\RetrieveActionRequest;

class ActionsTest extends PHPUnit_Framework_TestCase
{
    protected $mockResponse;
    protected $client;

    public function setUp()
    {
        $this->mockResponse = '{
          "action": {
            "id": 36804636,
            "status": "completed",
            "type": "create",
            "started_at": "2014-11-14T16:29:21Z",
            "completed_at": "2014-11-14T16:30:06Z",
            "resource_id": 3164444,
            "resource_type": "droplet",
            "region": "nyc3",
            "region_slug": "nyc3"
          }
        }';

        $mock = new MockHandler([
            new Response(200, [], $this->mockResponse),
        ]);

        $handler = HandlerStack::create($mock);

        $this->client = new DoClient();
        $this->client->setHttpClient(
            new Client(['handler' => $handler])
        );
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Retrieve Action model required.
     */
    public function testGetActionsFail()
    {
        $actions = new Actions;
        $response = $actions->retrieve($this->client);
    }

    public function testGetActions()
    {
        $actions = new Actions;
        $retrieveActions = new RetrieveActionRequest(36804636);
        $response = $actions->retrieve($this->client, $retrieveActions);
        $json = json_decode($response->getBody()->getContents());
        $this->assertEquals($json->action->id, 36804636);
        $this->assertEquals($response->getStatusCode(), 200);
    }

    public function testGetAllActions()
    {
        $this->mockResponse = '{
          "actions": [
            {
              "id": 36804636,
              "status": "completed",
              "type": "create",
              "started_at": "2014-11-14T16:29:21Z",
              "completed_at": "2014-11-14T16:30:06Z",
              "resource_id": 3164444,
              "resource_type": "droplet",
              "region": "nyc3",
              "region_slug": "nyc3"
            }
          ],
          "links": {
            "pages": {
              "last": "https://api.digitalocean.com/v2/actions?page=159&per_page=1",
              "next": "https://api.digitalocean.com/v2/actions?page=2&per_page=1"
            }
          },
          "meta": {
            "total": 159
          }
        }';

        $mock = new MockHandler([
            new Response(200, [], $this->mockResponse),
        ]);

        $handler = HandlerStack::create($mock);

        $this->client = new DoClient();
        $this->client->setHttpClient(
            new Client(['handler' => $handler])
        );

        $actions = new Actions;
        $response = $actions->getAll($this->client);
        $this->assertEquals($response->getStatusCode(), 200);
    }

    public function testFourOhFourError()
    {
        $this->mockResponse = '{
          "actions": [
            {
              "id": 36804636,
              "status": "completed",
              "type": "create",
              "started_at": "2014-11-14T16:29:21Z",
              "completed_at": "2014-11-14T16:30:06Z",
              "resource_id": 3164444,
              "resource_type": "droplet",
              "region": "nyc3",
              "region_slug": "nyc3"
            }
          ],
          "links": {
            "pages": {
              "last": "https://api.digitalocean.com/v2/actions?page=159&per_page=1",
              "next": "https://api.digitalocean.com/v2/actions?page=2&per_page=1"
            }
          },
          "meta": {
            "total": 159
          }
        }';

        $mock = new MockHandler([
            new Response(404, [], $this->mockResponse),
        ]);

        $handler = HandlerStack::create($mock);

        $this->client = new DoClient();
        $this->client->setHttpClient(
            new Client(['handler' => $handler])
        );

        $actions = new Actions;
        $response = $actions->getAll($this->client);
        $this->assertEquals($response->getStatusCode(), 404);
    }
}
