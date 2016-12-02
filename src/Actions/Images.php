<?php

namespace wappr\DigitalOcean\Actions;

use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Actions\UpdateInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;

class Images implements ListInterface, RetrieveInterface, UpdateInterface
{
    public function getAll(ClientInterface $client)
    {
        // TODO: Implement getAll() method.
    }

    public function retrieve(ClientInterface $client)
    {
        // TODO: Implement retrieve() method.
    }

    public function update(ClientInterface $client)
    {
        // TODO: Implement update() method.
    }

    public function destroy(ClientInterface $client)
    {
        // TODO: Implement destroy() method.
    }
}
