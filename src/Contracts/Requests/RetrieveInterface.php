<?php

namespace wappr\DigitalOcean\Contracts\Requests;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Interface RetrieveInterface.
 */
interface RetrieveInterface
{
    /**
     * @param ClientInterface $client
     * @return ResponseInterface
     */
    public function retrieve(ClientInterface $client): ResponseInterface;
}
