<?php

namespace wappr\DigitalOcean\Actions;

use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\ResourceInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Actions\UpdateInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;

class SSHKeys implements ListInterface, ResourceInterface, RetrieveInterface, UpdateInterface
{
    public function getAll(ClientInterface $client)
    {
        // TODO: Implement getAll() method.
    }

    public function create(ClientInterface $client)
    {
        // TODO: Implement create() method.
    }

    public function delete(ClientInterface $client)
    {
        // TODO: Implement delete() method.
    }

    public function retrieve(ClientInterface $client)
    {
        // TODO: Implement retrieve() method.
    }

    public function update(ClientInterface $client)
    {
        // TODO: Implement update() method.
    }
}
