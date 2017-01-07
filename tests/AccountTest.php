<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use wappr\DigitalOcean\Account\AccountManager;
use wappr\DigitalOcean\Client\Client as DoClient;

class AccountTest extends PHPUnit_Framework_TestCase
{
    protected $mockResponse;
    protected $client;

    public function setUp()
    {
        $this->mockResponse = '{
          "account": {
            "droplet_limit": 25,
            "floating_ip_limit": 5,
            "email": "sammy@digitalocean.com",
            "uuid": "b6fr89dbf6d9156cace5f3c78dc9851d957381ef",
            "email_verified": true,
            "status": "active",
            "status_message": ""
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

    public function testGetAccountInfo()
    {
        $account = new AccountManager();
        $response = $account->retrieve($this->client);
        $json = json_decode($response->getBody()->getContents());
        $this->assertTrue($json->account->email_verified);
        $this->assertEquals($response->getStatusCode(), 200);
    }
}
