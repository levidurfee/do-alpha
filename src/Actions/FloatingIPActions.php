<?php

namespace wappr\DigitalOcean\Actions;

use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;

class FloatingIPActions implements ListInterface, RetrieveInterface
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
