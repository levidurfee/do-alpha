<?php

namespace wappr\DigitalOcean\FloatingIPs;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\ListInterface;
use wappr\DigitalOcean\Contracts\Requests\ResourceInterface;
use wappr\DigitalOcean\Contracts\Requests\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Class FloatingIPs.
 */
class FloatingIPs implements ListInterface, ResourceInterface, RetrieveInterface
{
    public function getAll(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement getAll() method.
    }

    public function create(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement create() method.
    }

    public function delete(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement delete() method.
    }

    public function retrieve(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement retrieve() method.
    }
}
