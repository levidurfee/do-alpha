<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;

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
