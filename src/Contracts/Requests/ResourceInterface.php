<?php

namespace wappr\DigitalOcean\Contracts\Requests;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Interface ResourceInterface.
 */
interface ResourceInterface
{
    public function create(ClientInterface $client): ResponseInterface;
    public function delete(ClientInterface $client): ResponseInterface;
}
