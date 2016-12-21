<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\DigitalOcean\Actions\Domains;
use wappr\DigitalOcean\Client as DoClient;
use wappr\DigitalOcean\Models\Create\CreateDomainRequest;
use wappr\DigitalOcean\Models\Delete\DeleteDomainRequest;
use wappr\DigitalOcean\Models\Retrieve\RetrieveDomainModel;

class DomainsTest extends PHPUnit_Framework_TestCase
{
    public function testGetAll()
    {
        $mockResponse = '{
          "domains": [
            {
              "name": "example.com",
              "ttl": 1800,
              "zone_file": "$ORIGIN example.com.\n$TTL 1800\nexample.com. IN SOA ns1.digitalocean.com. hostmaster.example.com. 1415982609 10800 3600 604800 1800\nexample.com. 1800 IN NS ns1.digitalocean.com.\nexample.com. 1800 IN NS ns2.digitalocean.com.\nexample.com. 1800 IN NS ns3.digitalocean.com.\nexample.com. 1800 IN A 1.2.3.4\n"
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

        $domains = new Domains;
        $response = $domains->getAll($client);
        $this->assertEquals($response->getStatusCode(), 200);
    }

    public function testCreate()
    {
        $mockResponse = '{
          "name": "example.com",
          "ip_address": "1.2.3.4"
        }';

        $mock = new MockHandler([
            new Response(200, [], $mockResponse),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new DoClient();
        $client->setHttpClient(
            new Client(['handler' => $handler])
        );

        $domains = new Domains;
        $domain = new CreateDomainRequest('example.com', '127.0.0.1');
        $response = $domains->create($client, $domain);
        $this->assertEquals($response->getStatusCode(), 200);
    }

    public function testRetrieve()
    {
        $mockResponse = '{
          "name": "example.com",
          "ip_address": "1.2.3.4"
        }';

        $mock = new MockHandler([
            new Response(200, [], $mockResponse),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new DoClient();
        $client->setHttpClient(
            new Client(['handler' => $handler])
        );

        $domains = new Domains;
        $retrieve = new RetrieveDomainModel('example.com');
        $response = $domains->retrieve($client, $retrieve);
        $this->assertEquals($response->getStatusCode(), 200);
    }

    public function testDelete()
    {
        $mockResponse = '';

        $mock = new MockHandler([
            new Response(204, [], $mockResponse),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new DoClient();
        $client->setHttpClient(
            new Client(['handler' => $handler])
        );

        $domains = new Domains;
        $delete = new DeleteDomainRequest('example.com');
        $response = $domains->delete($client, $delete);
        $this->assertEquals($response->getStatusCode(), 204);
    }
}
