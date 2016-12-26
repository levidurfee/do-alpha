<?php

namespace wappr\DigitalOcean\Regions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\ListInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Class Regions.
 */
class Regions implements ListInterface
{
    /**
     * List all of the regions that are available.
     *
     * @param ClientInterface $client
     *
     * @return ResponseInterface
     */
    public function getAll(ClientInterface $client): ResponseInterface
    {
        return $client->get('regions');
    }
}
