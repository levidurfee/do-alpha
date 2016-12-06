<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;

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
