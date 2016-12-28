<?php

namespace wappr\DigitalOcean\ImageActions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Class ImageActions.
 */
class ImageActions implements RetrieveInterface
{
    public function retrieve(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement retrieve() method.
    }
}
