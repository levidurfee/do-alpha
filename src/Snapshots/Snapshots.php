<?php

namespace wappr\DigitalOcean\Snapshots;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\ListContract;
use wappr\DigitalOcean\Contracts\Requests\RetrieveContract;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Class Snapshots.
 */
class Snapshots implements ListContract, RetrieveContract
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
