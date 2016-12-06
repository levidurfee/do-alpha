<?php

namespace wappr\DigitalOcean\Contracts\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;

/**
 * Interface UpdateInterface.
 */
interface UpdateInterface
{
    public function update(ClientInterface $client): ResponseInterface;
}
