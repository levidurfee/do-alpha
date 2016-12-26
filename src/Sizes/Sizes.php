<?php

namespace wappr\DigitalOcean\Sizes;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\ListInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Class Sizes.
 */
class Sizes implements ListInterface
{
    public function getAll(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement getAll() method.
    }
}
