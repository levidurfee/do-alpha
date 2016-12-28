<?php

namespace wappr\DigitalOcean\DropletActions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Class DropletActions.
 */
class DropletActions implements RetrieveInterface
{
    public function retrieve(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement retrieve() method.
    }
}
