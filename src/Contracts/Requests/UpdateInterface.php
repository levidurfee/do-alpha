<?php

namespace wappr\DigitalOcean\Contracts\Requests;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Interface UpdateInterface.
 */
interface UpdateInterface
{
    public function update(ClientInterface $client): ResponseInterface;
}
