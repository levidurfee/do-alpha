<?php

namespace wappr\DigitalOcean\Actions;

use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;

class Regions implements ListInterface
{
    /**
     * List all of the regions that are available.
     *
     * @param ClientInterface $client
     */
    public function getAll(ClientInterface $client)
    {
        $client->get('regions');
    }
}
