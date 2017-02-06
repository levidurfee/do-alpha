<?php

namespace wappr\digitalocean\Contracts;

use wappr\digitalocean\Client;

abstract class ManagerContract
{
    /**
     * @var Client $client
     */
    protected $client;

    public function __construct($client = null)
    {
        if ($client == null) {
            $this->client = new Client();

            return;
        }

        $this->client = $client;
    }
}
