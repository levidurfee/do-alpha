<?php

namespace wappr\DigitalOcean\Sizes;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\ListContract;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Class SizesManager.
 */
class SizesManager implements ListContract
{
    public function getAll(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement getAll() method.
    }
}
