<?php

namespace wappr\DigitalOcean\Contracts\Requests;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Interface RetrieveInterface.
 */
interface RetrieveInterface
{
    public function retrieve(ClientInterface $client): ResponseInterface;
}
