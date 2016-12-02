<?php

namespace wappr\DigitalOcean\Actions;

use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;

class Actions implements ListInterface, RetrieveInterface
{
    public function getAll(ClientInterface $client)
    {
        // TODO: Implement getAll() method.
    }

    public function retrieve(ClientInterface $client)
    {
        // TODO: Implement retrieve() method.
    }
}
