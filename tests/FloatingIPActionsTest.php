<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\DigitalOcean\FloatingIPActions\FloatingIPActionsManager;
use wappr\DigitalOcean\Client\Client as DoClient;
use wappr\DigitalOcean\FloatingIPActions\Requests\AssignFloatingIPActionsRequest;
use wappr\DigitalOcean\FloatingIPActions\Requests\UnAssignFloatingIPActionRequest;
use wappr\DigitalOcean\FloatingIPActions\Requests\RetrieveFloatingIPActionsRequest;
use wappr\DigitalOcean\FloatingIPActions\Requests\RetrieveFloatingIPActionRequest;

class FloatingIPActionsTest extends PHPUnit_Framework_TestCase
{
    public function testAssign()
    {
        $mockResponse = '{
          "action": {
            "id": 68212728,
            "status": "in-progress",
            "type": "assign_ip",
            "started_at": "2015-10-15T17:45:44Z",
            "completed_at": null,
            "resource_id": 758603823,
            "resource_type": "floating_ip",
            "region": {
              "name": "New York 3",
              "slug": "nyc3",
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
            "region_slug": "nyc3"
          }
        }';

        $mock = new MockHandler([
            new Response(200, [], $mockResponse),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new DoClient();
        $client->setHttpClient(
            new Client(['handler' => $handler])
        );

        $floatingIPsActions = new FloatingIPActionsManager();
        $response = $floatingIPsActions->assign(
            $client,
            new AssignFloatingIPActionsRequest('assign', 11111, '1.1.1.1')
        );
        $this->assertEquals($response->getStatusCode(), 200);
    }

    public function testUnAssign()
    {
        $mockResponse = '{
          "action": {
            "id": 68212773,
            "status": "in-progress",
            "type": "unassign_ip",
            "started_at": "2015-10-15T17:46:15Z",
            "completed_at": null,
            "resource_id": 758603823,
            "resource_type": "floating_ip",
            "region": {
              "name": "New York 3",
              "slug": "nyc3",
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
            "region_slug": "nyc3"
          }
        }';

        $mock = new MockHandler([
            new Response(200, [], $mockResponse),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new DoClient();
        $client->setHttpClient(
            new Client(['handler' => $handler])
        );

        $floatingIPsActions = new FloatingIPActionsManager();
        $response = $floatingIPsActions->unAssign(
            $client,
            new UnAssignFloatingIPActionRequest('1.1.1.1')
        );
        $this->assertEquals($response->getStatusCode(), 200);
    }

    public function testGetAll()
    {
        $mockResponse = '{
          "actions": [
            {
              "id": 72531856,
              "status": "completed",
              "type": "reserve_ip",
              "started_at": "2015-11-21T21:51:09Z",
              "completed_at": "2015-11-21T21:51:09Z",
              "resource_id": 758604197,
              "resource_type": "floating_ip",
              "region": {
                "name": "New York 3",
                "slug": "nyc3",
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
              "region_slug": "nyc3"
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
        ]);

        $handler = HandlerStack::create($mock);

        $client = new DoClient();
        $client->setHttpClient(
            new Client(['handler' => $handler])
        );

        $floatingIPsActions = new FloatingIPActionsManager();
        $response = $floatingIPsActions->getAll(
            $client,
            new RetrieveFloatingIPActionsRequest('1.1.1.1')
        );
        $this->assertEquals($response->getStatusCode(), 200);
    }

    public function testRetrieve()
    {
        $mockResponse = '{
          "action": {
            "id": 72531856,
            "status": "completed",
            "type": "assign_ip",
            "started_at": "2015-11-12T17:51:03Z",
            "completed_at": "2015-11-12T17:51:14Z",
            "resource_id": 758604968,
            "resource_type": "floating_ip",
            "region": {
              "name": "New York 3",
              "slug": "nyc3",
              "sizes": [
                "1gb",
                "2gb",
                "4gb",
                "8gb",
                "32gb",
                "64gb",
                "512mb",
                "48gb",
                "16gb"
              ],
              "features": [
                "private_networking",
                "backups",
                "ipv6",
                "metadata"
              ],
              "available": true
            },
            "region_slug": "nyc3"
          }
        }';

        $mock = new MockHandler([
            new Response(200, [], $mockResponse),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new DoClient();
        $client->setHttpClient(
            new Client(['handler' => $handler])
        );

        $floatingIPsActions = new FloatingIPActionsManager();
        $response = $floatingIPsActions->retrieve(
            $client,
            new RetrieveFloatingIPActionRequest('1.1.1.1', 11111)
        );
        $this->assertEquals($response->getStatusCode(), 200);
    }
}
