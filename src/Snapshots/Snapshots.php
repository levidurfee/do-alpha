<?php

namespace wappr\DigitalOcean\Snapshots;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\ListInterface;
use wappr\DigitalOcean\Contracts\Requests\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Class Snapshots.
 */
class Snapshots implements ListInterface, RetrieveInterface
{
    public function getAll(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement getAll() method.
    }

    public function retrieve(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement retrieve() method.
    }

    public function destroy(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement destroy() method.
    }
}
