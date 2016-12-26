<?php

namespace wappr\DigitalOcean\Contracts\Requests;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Interface ListInterface.
 */
interface ListInterface
{
    /**
     * @param ClientInterface $client
     *
     * @return ResponseInterface
     */
    public function getAll(ClientInterface $client): ResponseInterface;
}
