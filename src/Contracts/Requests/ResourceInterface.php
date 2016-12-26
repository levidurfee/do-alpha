<?php

namespace wappr\DigitalOcean\Contracts\Requests;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Interface ResourceInterface.
 */
interface ResourceInterface
{
    /**
     * @param ClientInterface $client
     * @return ResponseInterface
     */
    public function create(ClientInterface $client): ResponseInterface;

    /**
     * @param ClientInterface $client
     * @return ResponseInterface
     */
    public function delete(ClientInterface $client): ResponseInterface;
}
