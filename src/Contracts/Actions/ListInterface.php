<?php

namespace wappr\DigitalOcean\Contracts\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;

/**
 * Interface ListInterface.
 */
interface ListInterface
{
    public function getAll(ClientInterface $client): ResponseInterface;
}
