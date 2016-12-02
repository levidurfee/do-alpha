<?php

namespace wappr\DigitalOcean\Actions;

use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;

class Regions implements ListInterface
{
    public function getAll(ClientInterface $client)
    {
        $client->get('regions');
    }
}
