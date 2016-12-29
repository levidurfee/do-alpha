<?php

namespace wappr\DigitalOcean\Contracts\Requests;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Interface UpdateContract.
 */
interface UpdateContract
{
    /**
     * @param ClientInterface $client
     *
     * @return ResponseInterface
     */
    public function update(ClientInterface $client): ResponseInterface;
}
